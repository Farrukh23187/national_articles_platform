<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConferenceCategory extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function conference(){
        return $this->belongsTo('App\Conference');
    }
}
