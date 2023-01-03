<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create permissions
        Permission::create(['name' => 'edit estates']);
        Permission::create(['name' => 'delete estates']);
        Permission::create(['name' => 'publish estates']);
        Permission::create(['name' => 'unpublish estates']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'client']);
        // or may be done by chaining
        $role = Role::create(['name' => 'agent'])
            ->givePermissionTo(['publish estates', 'unpublish estates', 'edit estates']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
