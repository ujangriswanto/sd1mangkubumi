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
        Schema::create('jurnal_harians', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('teacher_staff_id')
                ->nullable()
                ->constrained('teacher_staff')
                ->nullOnDelete();

            $table->foreignId('school_class_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('semester');

            $table->date('tanggal');

            $table->string('judul_pembelajaran');

            $table->text('materi_pokok');

            $table->longText('kegiatan');

            $table->text('penilaian');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_harians');
    }
};
