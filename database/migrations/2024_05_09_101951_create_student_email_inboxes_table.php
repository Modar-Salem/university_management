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
        Schema::create('student_email_inboxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('lecturers');
            $table->foreignId('receiver_id')->constrained('students');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_email_inboxes');
    }
};
