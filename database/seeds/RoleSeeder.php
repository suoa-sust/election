<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [ 'super-admin' => 'Super Admin Role' ,
                    'admin' => 'Admin Role',
                    'user' => 'Regular User Role'
                ];
        foreach ($roles as $role => $roleValue){
            Role::create(['name' => $role]);
        }

        $admin = User::find(1);
        $admin->assignRole('super-admin');

        $user = User::find(2);
        $user->assignRole('user');

    }
}
