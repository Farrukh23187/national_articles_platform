<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $guarded = [];
     
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
    	return $this->belongsTo(Author::class);
    }

    public function type(){
    	return $this->belongsTo(Type::class);
    }
}
