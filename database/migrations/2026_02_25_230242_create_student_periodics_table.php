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
        Schema::create('student_periodics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('head_circumference')->nullable();

            $table->decimal('distance_to_school', 5, 2)->nullable();
            $table->integer('travel_time')->nullable(); // menit
            $table->integer('siblings_count')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_periodics');
    }
};
