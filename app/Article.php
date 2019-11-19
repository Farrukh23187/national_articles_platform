<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleCategory;
use App\Author;
class Article extends Model
{
     protected $guarded = [];
     
    public function article_categories(){
        return $this->belongsTo(ArticleCategory::class);
    }

    public function author(){
    	return $this->belongsTo(Author::class);
    }

    
}
