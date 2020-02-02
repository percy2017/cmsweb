<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();
        // $role2 = Role::where('name', 'editor')->firstOrFail();

        $permissions = Permission::all();

        $role->permissions()->sync(
            $permissions->pluck('id')->all()
        );
        // $role2->permissions()->sync(
        //     $permissions->pluck('id')->all()
        // );
    }
}
