<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
use Illuminate\Support\Facades\DB;
class ResourceController extends Controller
{
    public function article(){
        $article = Article::all();
        
        return view('frontend.articles.index', compact('article'));

    }

    public function articleShow(Article $article)
    {

        $article_categories = ArticleCategory::where('article_id', $article->id)->get();
        return view('frontend.articles.show', compact('article', 'article_categories'));
    }

    public function filterArticles(Request $request){
        $article = Article::all();
        $cat_id = $request->cat_id;

        if($cat_id!="" ){
            $data = DB::table('articles')
                ->join('article_categories','articles.id','article_categories.article_id')
                ->where('article_categories.category_id',$cat_id)
                ->get();
        }
        if(count($data)=="0"){
            echo "<h1 align='center'>no products found under this Category</h1>";
        }else{
//            return $data[0]->name;
            return view('frontend.articles.filterPage',[
                'data' => $data,

            ]);
        }

    }

}

