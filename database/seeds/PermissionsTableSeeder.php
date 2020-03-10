<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_crud_permission = new Permission();
        $roles_crud_permission->name         = 'roles-crud';
        $roles_crud_permission->display_name = 'CRUD for roles';
        $roles_crud_permission->description  = 'Create Read Update Delete for roles table';
        $roles_crud_permission->save();

        $users_crud_permission = new Permission();
        $users_crud_permission->name         = 'users-crud';
        $users_crud_permission->display_name = 'CRUD for users';
        $users_crud_permission->description  = 'Create Read Update Delete for users table';
        $users_crud_permission->save();

        $permissions_crud_permission = new Permission();
        $permissions_crud_permission->name         = 'permissions-crud';
        $permissions_crud_permission->display_name = 'CRUD for permissions';
        $permissions_crud_permission->description  = 'Create Read Update Delete for permissions table';
        $permissions_crud_permission->save();

        $articles_crud_permission = new Permission();
        $articles_crud_permission->name         = 'articles-crud';
        $articles_crud_permission->display_name = 'CRUD for articles';
        $articles_crud_permission->description  = 'Create Read Update Delete for articles table';
        $articles_crud_permission->save();

        $admin_role = Role::where('name', 'admin')->first();
        $staff_role = Role::where('name', 'staff')->first();
        $user_role  = Role::where('name', 'user')->first();


         $admin_role->attachPermissions([$roles_crud_permission, $users_crud_permission, $permissions_crud_permission, $articles_crud_permission]);
         $staff_role->attachPermissions([$articles_crud_permission]);
         $user_role->attachPermissions([$articles_crud_permission]);

    }
}
