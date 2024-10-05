<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'fse Admin',
                'email' => 'admin@fsefashion.com',
                'password' => Hash::make('admin@123'), // Make sure to hash the password
                'picture' => 'default.png',
                'picture_delete_url' => 'http://example.com/default.png',
                'role' => 'admin',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'fse user',
                'email' => 'user@fsefashion.com',
                'password' => Hash::make('user@123'),
                'picture' => 'default.png',
                'picture_delete_url' => 'http://example.com/default.png',
                'role' => 'customer',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
