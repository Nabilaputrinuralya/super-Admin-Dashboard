<?php

namespace Database\Seeders;

use App\Models\ContactUsCard2;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContacUsCard2Seeder extends Seeder
{
    public function run()
    {
        ContactUsCard2::create([
            'cardtitle' => 'Can’t wait? Send a message!',
            'carddescription' => 'Example Card Description 2',
            // Add other fields as needed
        ]);

        // Add more seed data as needed
    }
}
