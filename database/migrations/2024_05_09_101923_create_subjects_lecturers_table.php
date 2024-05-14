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
        Schema::create('subjects_lecturers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('lecturer_id')->constrained('lecturers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects_lecturers');
    }
};
