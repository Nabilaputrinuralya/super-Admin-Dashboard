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
        Schema::create('about_teams', function (Blueprint $table) {
            $table->id();
            $table->text('fullname');
            $table->text('jobposition');
            $table->text('instagramlink');
            $table->text('linkedinlink');
            $table->string('profilepicture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_teams');
    }
};
