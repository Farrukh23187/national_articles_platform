<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
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

}

