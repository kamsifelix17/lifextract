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
    Schema::create('inquiries', function (Blueprint $table) {
        $table->id();
        $table->string('type'); // 'volunteer', 'partner', 'guest', 'therapy_support', 'legal_support', 'dating_support', 'general'
        $table->string('full_name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->text('details'); // Their message, idea, or confidential support request
        $table->string('status')->default('pending'); // 'pending', 'reviewed', 'contacted'
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
