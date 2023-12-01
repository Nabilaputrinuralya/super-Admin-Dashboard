<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_us_card1s', function (Blueprint $table) {
            $table->id();
            $table->text('cardtitle');
            $table->text('carddescription');
            $table->text('day');
            $table->text('time');
            $table->text('phonenumber');
            $table->text('emailaddress');
            $table->text('locationaddress');
            $table->text('facebooklink');
            $table->text('twitterlink');
            $table->text('instagramlink');
            $table->text('linkedinlink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
