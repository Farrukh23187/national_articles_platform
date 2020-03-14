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
        $article = Article::where('status', '!=', 0)->get();
        $count  = 1;

        return view('frontend.articles.index', compact('article', 'count'));

    }

    public function articleShow(Article $article)
    {

        $article_categories = ArticleCategory::where('article_id', $article->id)->get();
        $article_authors = ArticleAuthor::where('article_id', $article->id)->get();

        return view('frontend.articles.show', compact('article', 'article_categories', 'article_authors'));
    }

    public function filterArticles(Request $request){
        // dd($request);
        $author = $request->authors;
        $cat_id = $request->cat_id;
        $key_words = $request->key_words;
        $count  = 1;


        if($cat_id!="" && $author!="" && $key_words!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->join('article_authors', 'article_authors.article_id', 'articles.id')
                ->join('authors','authors.id','article_authors.author_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('authors.fullname','LIKE','%'.$author.'%')
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->where('articles.status', '!=', 0)
                ->get();
        } 
        else if($key_words!=""&& $author!=""){
            $data = DB::table('articles')
                ->join('article_authors', 'article_authors.article_id', 'articles.id')
                ->join('authors','authors.id','article_authors.author_id')
                ->where('authors.fullname','LIKE','%'.$author.'%')
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->where('articles.status', '!=', 0)
                ->get();
        }
        else if($key_words!=""&& $cat_id!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->where('articles.status', '!=', 0)
                ->get();
        }
        else if($cat_id!=""&& $author!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->join('article_authors', 'article_authors.article_id', 'articles.id')
                ->join('authors','authors.id','article_authors.author_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('authors.fullname','LIKE','%'.$author.'%')
                ->where('articles.status', '!=', 0)
                ->get();
        }
        else if($key_words!=""){
            $data = DB::table('articles')
                ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->where('articles.status', '!=', 0)
                ->get();
        }
        else if($cat_id!=""){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->where('articles.status', '!=', 0)
                ->get();
        }
        else if($author!=""){
            $data = DB::table('articles')
                ->join('article_authors', 'article_authors.article_id', 'articles.id')
                ->join('authors','authors.id','article_authors.author_id')
                ->where('authors.fullname','LIKE','%'.$author.'%')
                ->get();
                // dd($data);
        }
        if(count($data)=="0"){
            echo "<h1 align='center'>Bunday Categoriya mansub bo'lgan maqola topilmadi</h1>";
        }else{

//            return $data;
            return view('frontend.articles.filterPage',[
                'data' => $data,
                'count' => $count

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
            ->select('articles.*')
//            , 'authors.first_name', 'authors.last_name', 'categories.name as category', 'journals.name as journal'
            ->groupBy('articles.id')
            ->get();

        $this->response['result'] = ['citizens' => $article];
        return view('frontend.articles.selectApi', ['article' => json_encode($article)]);
    }

    public function aboutUs(){
        $article = Article::all();
        return view('about', [
           'article'=> $article
        ]);
    }

}

