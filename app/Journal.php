<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\JournalType;
class Journal extends Model
{
    protected $guarded = [];
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function journaltype(){
        return $this->belongsTo(JournalType::class);
    }

    public function journal_categories(){
        return $this->hasMany('App\JournalCategory');
    }
}
