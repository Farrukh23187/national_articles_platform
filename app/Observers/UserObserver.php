<?php


namespace App\Observers;


use App\Role;
use App\User;

class UserObserver
{

    public function created(User $user)
    {
        $roles = $user->roles()->get();

        if (sizeof($roles) == 0) {
            $user_role = Role::where('name', 'user')->first();
            $user->roles()->attach($user_role->id);
        }
    }
}