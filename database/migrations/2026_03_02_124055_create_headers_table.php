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
            $table->id(); // Kolom ID
            $table->string('nama_foto', 20)->nullable(); // Kolom nama_foto dengan panjang 20 karakter, nullable
            $table->string('header_foto')->nullable(); // Kolom header_foto, nullable
            $table->boolean('show_header')->default(true); // Kolom untuk menampilkan header, default true
            $table->softDeletes(); // Menambahkan kolom deleted_at untuk soft deletes
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