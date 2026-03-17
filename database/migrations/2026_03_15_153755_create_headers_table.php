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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();

            $table->string('nama_foto', 20)->nullable(); // Kolom nama_foto (maks 20 karakter)
            $table->string('header_foto'); // Kolom header_foto (untuk menyimpan gambar thumbnail)
            $table->boolean('show_header')->default(true); // Kolom untuk menentukan apakah header ditampilkan
            $table->softDeletes(); // Kolom deleted_at untuk soft deletes
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
