<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['student', 'teacher'];
        for ($i = 0; $i < count($roles); $i++) {
            Role::create(['name' => $roles[$i]]);
        }

        $names = ['teaching', 'learning'];
        for ($i = 0; $i < count($names); $i++) {
            Permission::create(['name' => $names[$i]]);
        }
    }
}
