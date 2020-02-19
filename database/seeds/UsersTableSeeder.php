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
            'fullname' => 'Farrukh Choriyev',
            'show_password' => 'admin2019',
            'password' => Hash::make('admin2020'),
            'email' => 'admin@mail.ru',
            'username' => 'admin'
            // 'status' => true
        ]);
        $admin_user->roles()->attach($admin_role->id);
    }
}
