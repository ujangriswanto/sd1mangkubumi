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
        Schema::table('profil_sekolahs', function (Blueprint $table) {
            if (!Schema::hasColumn('profil_sekolahs', 'headmaster_nip')) {
                $table->string('headmaster_nip')->nullable()->after('headmaster_name');
            }

            if (!Schema::hasColumn('profil_sekolahs', 'headmaster_quote')) {
                $table->string('headmaster_quote')->nullable();
            }

            if (!Schema::hasColumn('profil_sekolahs', 'struktur_organisasi')) {
                $table->string('struktur_organisasi')->nullable();
            }

            if (!Schema::hasColumn('profil_sekolahs', 'kurikulum')) {
                $table->text('kurikulum')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_sekolahs', function (Blueprint $table) {
            if (!Schema::hasColumn('profil_sekolahs', 'headmaster_nip')) {
                $table->string('headmaster_nip')->nullable()->after('headmaster_name');
            }

            if (!Schema::hasColumn('profil_sekolahs', 'headmaster_quote')) {
                $table->string('headmaster_quote')->nullable();
            }

            if (!Schema::hasColumn('profil_sekolahs', 'struktur_organisasi')) {
                $table->string('struktur_organisasi')->nullable();
            }

            if (!Schema::hasColumn('profil_sekolahs', 'kurikulum')) {
                $table->text('kurikulum')->nullable();
            }
        });
    }
};
