<?php


namespace App\Repositories;
use App\Article;

class ArticleRepository
{
    public function getKeyWords($key_word){

        $result = Article::where('key_words','LIKE','%'.$key_word.'%')->get();
        return $result;
    }
}