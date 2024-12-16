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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Customer's name
            $table->string('email'); // Customer's email address
            $table->string('phone')->nullable(); // Phone number (optional)
            $table->string('company')->nullable(); // Company name
            $table->string('country')->nullable(); // Country
            $table->string('job_title')->nullable(); // Job title
            $table->text('job_details')->nullable(); // Details about the job
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
