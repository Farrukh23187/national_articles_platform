<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleCategory;
class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function journal_categories(){
        return $this->hasMany('App\JournalCategory');
    }

    public function article_categories(){
        return $this->belongsTo(ArticleCategory::class);
    }
}
