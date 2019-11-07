<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\User;
class Company extends Model
{
    protected $guarded = [];

    public function employee(){
        return $this->hasMany(Employee::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
