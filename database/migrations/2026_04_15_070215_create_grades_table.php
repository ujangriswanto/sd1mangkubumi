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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $table->foreignId('school_class_id')->constrained()->cascadeOnDelete();

            $table->string('semester'); // 1 / 2
            $table->string('tahun_ajaran'); // contoh: 2025/2026

            $table->integer('uts')->nullable();
            $table->integer('uas')->nullable();

            $table->timestamps();

            // biar gak double data
            $table->unique([
                'student_id',
                'subject_id',
                'school_class_id',
                'semester',
                'tahun_ajaran'
            ], 'grades_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
