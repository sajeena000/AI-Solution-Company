<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions =  ['view_dashboard', 'manage_contacts', 'manage_feedbacks', 'manage_projects', 'manage_blogs', 'manage_users', 'manage_users'];


        foreach ($permissions as $permission) {
            Permission::updateOrCreate([
                'name' => $permission,
            ]);
        }
    }
}
