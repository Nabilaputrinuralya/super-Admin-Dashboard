<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data seed untuk model Navbar
        Navbar::create([
            'websitelogo' => 'Website_Logo.png', // Ganti dengan nama file logo default yang sebenarnya
        ]);

        // Anda dapat menambahkan lebih banyak data seed jika diperlukan

        // Contoh:
        // Navbar::create([
        //     'websitelogo' => 'another_logo.jpg',
        // ]);

        // Catatan: Pastikan untuk menempatkan file logo default Anda di direktori public/NavbarImages.

        // Anda dapat menjalankan seeder ini dengan:
        // php artisan db:seed --class=NavbarSeeder
    }
}
