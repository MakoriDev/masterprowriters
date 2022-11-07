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
            'add permission',
            'edit permission',
            'delete permission',
            'view permission',
            'add role',
            'edit role',
            'delete role',
            'view role',
            'add user',
            'edit user',
            'delete user',
            'view user',
            'view dashboard',
            'view all orders',
            'view active orders',
            'view complete orders',
            'view unpaid orders',
            'view order details',
            'view feedback'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        Role::create(['name' => 'user']);

    }
}
