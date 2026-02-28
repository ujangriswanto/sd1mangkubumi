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
        Schema::create('ppdb_walis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ppdb_registration_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->year('birth_year')->nullable();
            $table->string('education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_walis');
    }
};
