<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleAuthor extends Model
{
    public function author(){
        return $this->belongsTo('App\Author');
    }

    public function article(){
        return $this->belongsTo('App\Article');
    }
}
