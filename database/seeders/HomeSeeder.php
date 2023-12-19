<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'websiteimage' => 'Website_Image.png',
            'websitelogo' => 'Website_Logo.png',
            'greetingsword' => 'Welcome to our!',
            'websitedescription' => 'ProKing (Project Taking) merupakan sebuah website yang dibuat khusus untuk mengelola beberapa proyek yang telah dibuat. Dengan ProKing, Anda akan lebih mudah dalam menampilkan serta mengelola proyek.',
        ]);

        // Add more data if needed
    }
}
