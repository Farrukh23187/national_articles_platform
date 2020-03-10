<?php

namespace App;

use App\Conference;
use Illuminate\Database\Eloquent\Model;
use App\ArticleCategory;
use App\Author;
use App\Journal;
class Article extends Model
{
     protected $guarded = [];
     
    public function article_categories(){
        return $this->belongsTo(ArticleCategory::class);
    }

    public function author(){
    	return $this->belongsTo(Author::class);
    }
    public function journal(){
    	return $this->belongsTo(Journal::class);
    }
    public function conference(){
        return $this->belongsTo(Conference::class);
    }

    
}
