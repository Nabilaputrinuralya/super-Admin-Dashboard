<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUsDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutUsDescriptionSeeder extends Seeder
{
    public function run()
    {
        // You can adjust this data based on your model and database structure
        AboutUsDescription::create([
            'description' => 'Kami merupakan siswi SMK Negeri 1 Cimahi, jurusan Sistem Informatika Jaringan dan Aplikasi (SIJA) yang sedang melaksanakan Praktik Kerja Lapangan (PKL) di PT. Eltran Indonesia. Kegiatan PKL ini dilaksanakan selama 6 bulan pada bulan Juli-Desember 2023.',
        ]);
    }
}
