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
    Schema::create('programs', function (Blueprint $table) {
        $table->id(); // Unique ID for each program (1, 2, 3...)
        $table->string('title'); // e.g. "Support for Vulnerable Elderly Women Traders"
        $table->string('slug')->unique(); // Web link e.g. "elderly-women-support"
        $table->string('category'); // "elderly", "youth", "health", "scholarship", "community"
        $table->text('summary'); // Short 2-sentence summary
        $table->longText('description'); // Full detailed story and plan
        $table->decimal('target_amount', 12, 2)->nullable(); // e.g. 5,000,000.00
        $table->decimal('raised_amount', 12, 2)->default(0); // Donations received so far
        $table->string('image_path')->nullable(); // Photo of outreach
        $table->boolean('is_featured')->default(false); // Highlight on homepage?
        $table->timestamps(); // created_at and updated_at clocks
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
