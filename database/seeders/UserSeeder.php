<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmini@gmail.com', 
            'phone' => '000000000000', 
            'password' => bcrypt('superadmin123_'), // default password 'password' Default_Image
            'picture' => 'Default_Image,png' 
        ]);
    }
}