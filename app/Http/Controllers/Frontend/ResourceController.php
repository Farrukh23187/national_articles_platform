<?php

namespace App\Http\Controllers\Frontend;

use App\ArticleAuthor;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
use Illuminate\Support\Facades\DB;
class ResourceController extends Controller
{
    protected $response = [
        'success' => true,
        'result' => [],
        'error' => []
    ];
    private $repo;
    public function __construct()
    {
        $this->repo = new ArticleRepository();
    }

    public function article(){
        $article = Article::all();
        
        return view('frontend.articles.index', compact('article'));

    }

    public function articleShow(Article $article)
    {

        $article_categories = ArticleCategory::where('article_id', $article->id)->get();
        $article_authors = ArticleAuthor::where('article_id', $article->id)->get();

        return view('frontend.articles.show', compact('article', 'article_categories', 'article_authors'));
    }

    public function filterArticles(Request $request){
        $author_id = $request->author_id;
        $cat_id = $request->cat_id;
        $key_words = $request->key_words;

        if($cat_id!="" && $author_id!="" && $key_words!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->join('article_authors','articles.id','article_authors.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('article_authors.author_id',$author_id)
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->get();
        } 
        else if($key_words!=""&& $author_id!=""){
            $data = DB::table('articles')
                ->join('article_authors','articles.id','article_authors.article_id')
                ->where('article_authors.author_id',$author_id)
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->get();
        }
        else if($key_words!=""&& $cat_id!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->get();
        }
        else if($cat_id!=""&& $author_id!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->join('article_authors','articles.id','article_authors.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('article_authors.author_id',$author_id)
                ->get();
        }
        else if($key_words!=""){
            $data = DB::table('articles')
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->get();
        }
        else if($cat_id!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->get();
        }
        else if($author_id!=""){
            $data = DB::table('articles')
                ->join('article_authors','articles.id','article_authors.article_id')
                ->where('article_authors.author_id',$author_id)
                ->get();
        }
        if(count($data)=="0"){
            echo "<h1 align='center'>Bunday Categoriya mansub bo'lgan maqola topilmadi</h1>";
        }else{

//            return $data;
            return view('frontend.articles.filterPage',[
                'data' => $data,

            ]);
        }

    }

    public function searchByKeyWords(Request $request){

//        $result = $this->repo->getKeyWords($request->key_words);
        $result = Article::where('key_words','LIKE','%'.$request->key_words.'%')->get();

            dd($result);
    }

    public function select(Request $request){
        $article = DB::table('articles')
            ->join('article_categories', 'articles.id', 'article_categories.article_id')
            ->join('article_authors', 'articles.id', 'article_authors.article_id')
            ->join('authors', 'article_authors.author_id', 'authors.id')
            ->join('categories', 'article_categories.category_id', 'categories.id')
            ->join('journals', 'articles.journal_id', 'journals.id')
            ->select('articles.*', 'authors.first_name', 'authors.last_name', 'categories.name as category', 'journals.name as journal')
            ->groupBy('articles.id', 'authors.id',  'journals.id')
            ->get();

        $this->response['result'] = ['citizens' => $article];
        return response()->json($this->response);
    }

}

