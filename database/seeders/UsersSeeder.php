<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            User::create([
                'name' => 'Nabila Putri Nur Alya', 
                'email' => 'superadmin@gmail.com',
                'password'=>Hash::make('superadminpw'),
                ]);
            $this->command->info('Successfully seeding.');
        } else {
            $this->command->info('Users table is not empty. Skipping seeding');
        }
    }
}
