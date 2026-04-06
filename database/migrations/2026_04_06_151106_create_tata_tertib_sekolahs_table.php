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
        // Kita hapus dulu tabel lama jika ada biar tidak bentrok saat migrate
        Schema::dropIfExists('tata_tertib_sekolahs');
        Schema::dropIfExists('peraturan_sekolah');

        Schema::create('tata_tertib_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peraturan'); // Judul Aturan
            $table->text('isi_peraturan');    // Konten Lengkap (Text/HTML)
            $table->softDeletes();            // Fitur hapus sementara (sesuai Model)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tata_tertib_sekolahs');
    }
};