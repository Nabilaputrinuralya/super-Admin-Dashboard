<?php

namespace Database\Seeders;

use App\Models\ContactUsCard2;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsCard2Seeder extends Seeder
{
    public function run()
    {
        ContactUsCard2::create([
            'cardtitle' => 'Can’t wait? Send a message!',
            'carddescription' => 'Have a quick question? Fill out this form. If you need to include a picture or file attachment, please use emails.',
            // Add other fields as needed
        ]);

        // Add more seed data as needed
    }
}
