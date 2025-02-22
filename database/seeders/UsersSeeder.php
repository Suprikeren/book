<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        $adminRole = Role::where('name', 'Admin')->first();
        $editorRole = Role::where('name', 'Editor')->first();
        $viewerRole = Role::where('name', 'Viewer')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'role_id' => $adminRole->id
        ]);

        User::create([
            'name' => 'Editor',
            'email' => 'editor@example.com',
            'password' => bcrypt('editor'),
            'role_id' => $editorRole->id
        ]);

        User::create([
            'name' => 'Viewer',
            'email' => 'viewer@example.com',
            'password' => bcrypt('viewer'),
            'role_id' => $viewerRole->id
        ]);
    }
}
