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
        Schema::table('konselings', function (Blueprint $table) {
            $table->text('uraian_masalah');

            $table->boolean('bimbingan_individu')->default(false);
            $table->boolean('bimbingan_kelompok')->default(false);

            $table->text('penyelesaian')->nullable();
            $table->text('tindak_lanjut')->nullable();

            $table->dropColumn([
                'jenis',
                'masalah',
                'tindakan',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselings', function (Blueprint $table) {
            $table->date('jenis')->nullable();
            $table->string('masalah')->nullable();
            $table->string('tindakan')->nullable();
        });
    }
};
