<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tata_tertib_sekolahs', function (Blueprint $table) {
            if (!Schema::hasColumn('tata_tertib_sekolahs', 'deleted_at')) {
                $table->softDeletes();
            }

            if (!Schema::hasColumn('tata_tertib_sekolahs', 'nama_peraturan')) {
                $table->string('nama_peraturan')->nullable()->after('id');
            }

            if (!Schema::hasColumn('tata_tertib_sekolahs', 'isi_peraturan')) {
                $table->text('isi_peraturan')->nullable()->after('nama_peraturan');
            }
        });
    }

    public function down(): void
    {
        Schema::table('tata_tertib_sekolahs', function (Blueprint $table) {
            if (Schema::hasColumn('tata_tertib_sekolahs', 'deleted_at')) {
                $table->dropSoftDeletes();
            }

            if (Schema::hasColumn('tata_tertib_sekolahs', 'isi_peraturan')) {
                $table->dropColumn('isi_peraturan');
            }

            if (Schema::hasColumn('tata_tertib_sekolahs', 'nama_peraturan')) {
                $table->dropColumn('nama_peraturan');
            }
        });
    }
};