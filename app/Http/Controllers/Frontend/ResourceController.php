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
        $article = Article::all();
        $cat_id = $request->cat_id;
        $key_words = $request->key_words;

        if($cat_id!="" ){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->get();
        } else if($key_words!=""){
            $data = DB::table('articles')
//                ->join('article_categories','articles.id','article_categories.article_id')
//                ->where('article_categories.category_id',$cat_id)
                    ->where('articles.key_words','LIKE','%'.$key_words.'%')
                ->get();
        }
        if(count($data)=="0"){
            echo "<h1 align='center'>no products found under this Category</h1>";
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

}

