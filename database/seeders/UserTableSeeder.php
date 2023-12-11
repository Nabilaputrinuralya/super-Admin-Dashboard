<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            User::create([
                'name'=>'Fuji Anggraeni', 
                'email'=>'superadmin@gmail.com',
                'password'=>Hash::make('superadminpw'),
                'telp'=>'0812345678910',
                'role' =>'Super Admin',
            ]);
            $this->command->info('Users table is empty. Successfully seeding.');
        } else {
            $this->command->info('Users table is not empty. Skipping seeding');
        }
    }
}
