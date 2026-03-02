<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('header_foto'); // Kolom header_foto untuk gambar
            $table->string('school_name'); // Kolom school_name untuk nama sekolah
            $table->string('sub_title'); // Kolom sub_title untuk subtitle
            $table->boolean('show_header')->default(true); // Kolom untuk menampilkan header, default true
            $table->softDeletes(); // Kolom deleted_at untuk soft deletes
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers'); // Menghapus tabel headers jika migrasi dibatalkan
    }
}