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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('nis')->unique()->nullable();
            $table->string('name');

            $table->enum('gender', ['L', 'P']);
            $table->date('birth_date')->nullable();

            $table->foreignId('school_class_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();

            $table->string('parent_name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index('name');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
