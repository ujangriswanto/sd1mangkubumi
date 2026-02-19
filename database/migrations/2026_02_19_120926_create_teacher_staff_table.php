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
        Schema::create('teacher_staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); // Kepala Sekolah, Guru Kelas, TU, dll
            $table->string('photo')->nullable();
            $table->text('bio')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_staff');
    }
};
