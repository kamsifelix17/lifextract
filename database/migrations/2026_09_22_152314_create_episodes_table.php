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
    Schema::create('episodes', function (Blueprint $table) {
        $table->id();
        $table->integer('episode_number'); // Episode #1, #2, #3
        $table->string('title'); // e.g. "Talk Am As E Be: Navigating Red Flags & Intentional Dating"
        $table->string('slug')->unique(); // Web link e.g. "navigating-red-flags"
        $table->text('description'); // Episode overview
        $table->string('youtube_id')->nullable(); // YouTube video ID (e.g. "M7lc1UVf-VE")
        $table->string('audio_url')->nullable(); // Spotify/Apple/Audio link
        $table->string('guest_name')->nullable(); // e.g. "Mrs. Folake Davies"
        $table->string('guest_role')->nullable(); // e.g. "Certified Family Therapist"
        $table->string('guest_photo')->nullable(); // Guest picture
        $table->date('air_date'); // Release date
        $table->boolean('is_published')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
