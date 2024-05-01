<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456789'), 
            'role' => "admin"
        ]);

        Role::insert([
            [
                'name' => 'Admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Client',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Staff',
                'guard_name' => 'web',
            ],

        ]);
        $admin->assignRole('Admin');
        $this->call([
            TablleSeeder::class
        ]);

    }
}
