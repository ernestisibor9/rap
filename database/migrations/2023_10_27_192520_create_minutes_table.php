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
        Schema::create('minutes', function (Blueprint $table) {
            $table->id();
            $table->string('minutes_directory')->nullable();
            $table->string('title')->nullable();
            $table->string('praise_night_type')->nullable();
            $table->string('healing_stream_type')->nullable();
            $table->string('year')->nullable();
            $table->date('date_upload')->nullable();
            $table->string('pdf_file')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minutes');
    }
};