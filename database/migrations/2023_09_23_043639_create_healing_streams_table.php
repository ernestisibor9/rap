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
        Schema::create('healing_streams', function (Blueprint $table) {
            $table->id();
            $table->string('healing_stream')->nullable();
            $table->string('year')->nullable();
            $table->string('pdf_file')->nullable();
            $table->string('date_upload')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            // $table->string('days')->nullable();
            // $table->string('title')->nullable();
            // $table->string('leader')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healing_streams');
    }
};