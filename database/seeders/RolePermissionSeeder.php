<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view solar',
            'create solar',
            'edit solar'
        ];
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([
            'view solar',
            'create solar',
            'edit solar'
        ]);

        $reportRole = Role::create(['name' => 'report']);
        $reportRole->givePermissionTo([
            'view solar',
        ]);

        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
        ]);

        $report = User::create([
            'name' => 'report',
            'username' => 'report',
            'email' => 'report@mail.com',
            'password' => Hash::make('report'),
        ]);

        $admin->assignRole($adminRole);
        $report->assignRole($reportRole);
    }
}
