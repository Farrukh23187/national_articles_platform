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
            ['name' => 'journal', 'display_name' => 'Organization`s Journal', 'description' => 'Organization`s Journal can add Articles'],
            ['name' => 'conference', 'display_name' => 'Organization`s Conference', 'description' => 'Organization`s Conference can add Conferences']

        ];

        DB::table('roles')->insert($roles);
    }
}
