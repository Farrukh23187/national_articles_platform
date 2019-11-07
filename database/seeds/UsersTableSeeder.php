<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('name', 'admin')->first();
        $admin_user = User::firstOrCreate([
            'name' => 'Farrukh Choriyev',
            'password' => "admin2019",
            'email' => 'admin@mail.ru'
            // 'status' => true
        ]);
        $admin_user->roles()->attach($admin_role->id);
    }
}
