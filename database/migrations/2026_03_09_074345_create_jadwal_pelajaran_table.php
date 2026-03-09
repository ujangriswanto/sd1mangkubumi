<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID secara otomatis
            $table->string('kelas'); // Kolom untuk menyimpan nama kelas
            $table->string('waktu'); // Kolom untuk menyimpan waktu (misal: pagi, siang)
            $table->integer('jam_ke'); // Kolom untuk menyimpan jam ke-berapa
            $table->string('hari'); // Kolom untuk menyimpan hari (misal: Senin, Selasa)
            $table->string('tahun_pelajaran'); // Kolom untuk menyimpan tahun pelajaran (misal: 2022/2023)
            $table->timestamps(); // Kolom untuk mencatat waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pelajaran');
    }
}