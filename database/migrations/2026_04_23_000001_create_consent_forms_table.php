<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consent_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inquiry_id')->constrained('inquiries')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('consent_token')->unique(); // Unique token for the form
            $table->json('agreed_terms'); // Store which terms were agreed to
            $table->boolean('is_signed')->default(false);
            $table->timestamp('signed_at')->nullable();
            $table->string('pdf_file_path')->nullable(); // Path to stored PDF
            $table->string('png_file_path')->nullable(); // Path to stored PNG
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consent_forms');
    }
};
