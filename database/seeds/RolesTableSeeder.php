<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrator', 'description' => 'Admin have all permissions'],
            ['name' => 'staff', 'display_name' => 'Staff', 'description' => 'Organization`s Journal can add Articles'],
            ['name' => 'user', 'display_name' => 'User', 'description' => 'User'],
            ['name' => 'expert', 'display_name' => 'Expert', 'description' => 'Expert']

        ];

        DB::table('roles')->insert($roles);
    }
}
