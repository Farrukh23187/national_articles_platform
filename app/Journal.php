<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\JournalType;
class Journal extends Model
{
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function journaltype(){
        return $this->belongTo(JournalType::class);
    }
}
