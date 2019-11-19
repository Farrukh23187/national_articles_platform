<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalCategory extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function journal(){
        return $this->belongsTo('App\Journal');
    }
}
