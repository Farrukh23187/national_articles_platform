<?php

namespace App;
use App\ConferenceTypes;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $guarded = [];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function conferencetype(){
        return $this->belongsTo(ConferenceTypes::class);
    }

    public function conference_categories(){
        return $this->hasMany('App\ConferenceCategory');
    }
}
