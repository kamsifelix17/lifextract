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
    Schema::create('impact_stories', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Beneficiary or volunteer name e.g. "Mama Beatrice (Age 68)"
        $table->string('title'); // e.g. "From Roadside Hawking to a Thriving Kiosk"
        $table->string('category'); // "elderly_support", "youth_empowerment", "health"
        $table->text('story'); // The real human story
        $table->string('photo_path')->nullable(); // Photo
        $table->string('video_url')->nullable(); // Short video link
        $table->boolean('is_featured')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impact_stories');
    }
};
