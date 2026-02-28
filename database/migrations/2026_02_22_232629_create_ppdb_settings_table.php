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
        Schema::create('ppdb_settings', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_open')->default(false);

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->longText('requirements')->nullable(); // persyaratan
            $table->longText('flow')->nullable();         // alur

            $table->string('brochure')->nullable();       // pdf
            $table->string('registration_link')->nullable(); // kalau pakai google form

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_settings');
    }
};
