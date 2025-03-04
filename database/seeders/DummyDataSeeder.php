<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Full access to all features'],
            ['name' => 'editor', 'description' => 'Can create and edit content'],
            ['name' => 'subscriber', 'description' => 'Can read and comment'],
        ]);

        // Permissions
        DB::table('permissions')->insert([
            ['name' => 'create_post', 'description' => 'Can create new posts'],
            ['name' => 'edit_post', 'description' => 'Can edit existing posts'],
            ['name' => 'delete_post', 'description' => 'Can delete posts'],
            ['name' => 'manage_users', 'description' => 'Can manage user accounts'],
        ]);

        // Role-Permissions
        DB::table('role_permissions')->insert([
            ['role_id' => 1, 'permission_id' => 1],
            ['role_id' => 1, 'permission_id' => 2],
            ['role_id' => 1, 'permission_id' => 3],
            ['role_id' => 1, 'permission_id' => 4],
            ['role_id' => 2, 'permission_id' => 1],
            ['role_id' => 2, 'permission_id' => 2],
        ]);

        // Users
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password_hash' => Hash::make('password'),
                'full_name' => 'Admin User',
                'role_id' => 1,
            ],
            [
                'username' => 'johndoe',
                'email' => 'john@example.com',
                'password_hash' => Hash::make('password'),
                'full_name' => 'John Doe',
                'role_id' => 2,
            ],
        ]);
    }
}
