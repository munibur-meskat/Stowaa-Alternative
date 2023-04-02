<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
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
        
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // user define as a super-admin:
        $user = User::create([
            'name' => 'Shah Alam',
            'email' => 'thealamdev@gmail.com',
            'password' => Hash::make('123'),
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10),
        ]);

        $role = Role::create([
            "name" => "super-admin",
        ]);
        $user->assignRole($role);


        // create permissions:
        $arrayOfPermissionNames = ['show', 'edit','delete'];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });
    
        Permission::insert($permissions->toArray());

        // when register from form :
        Role::create([
            "name" => "user",
        ]);
        

        
    }
}
