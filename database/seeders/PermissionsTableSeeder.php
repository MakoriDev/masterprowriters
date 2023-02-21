<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        DB::table('permissions')->delete();

        $permissions = [
            // Permission
            'add permission',
            'edit permission',
            'delete permission',
            'view permission',

            // Role
            'add role',
            'edit role',
            'delete role',
            'view role',

            // User
            'add user',
            'edit user',
            'delete user',
            'view user',

            // Dashboard
            'view dashboard',

            // Orders
            'view all orders',
            'view active orders',
            'view complete orders',
            'view unpaid orders',
            'view order details',

            // Feedback
            'view feedback',

            // Blog Category
            'add blog category',
            'view blog category',
            'edit blog category',
            'delete blog category',

            // Blog
            'add blog',
            'view blog',
            'edit blog',
            'delete blog',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        Role::create(['name' => 'user']);

    }
}
