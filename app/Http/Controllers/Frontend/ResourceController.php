<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
class ResourceController extends Controller
{
    public function article(){
        $article = Article::all();
        
        return view('frontend.articles', compact('article'));

    }
}

