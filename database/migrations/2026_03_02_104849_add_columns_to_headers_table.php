<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->string('nama_foto', 20)->nullable();
            $table->string('header_foto')->nullable();
            $table->boolean('show_header')->default(true);
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->dropColumn(['nama_foto', 'header_foto', 'show_header']);
            $table->dropSoftDeletes();
        });
    }
};