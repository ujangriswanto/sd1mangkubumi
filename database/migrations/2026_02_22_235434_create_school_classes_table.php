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
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // 1A, 2B, dst
            $table->integer('grade_level'); // 1-6
            $table->foreignId('teacher_staff_id')
                  ->nullable()
                  ->constrained('teacher_staff')
                  ->nullOnDelete();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index('grade_level');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
