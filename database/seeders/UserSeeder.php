<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Richard',
                'username' => 'richard',
                'email' => 'richard@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'Alvin',
                'username' => 'alvin',
                'email' => 'alvin@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('vendor123')
            ],
            [
                'name' => 'pratama',
                'username' => 'pratama',
                'email' => 'pratama@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('user123')
            ]
        ]);
    }
}
