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
        Schema::table('students', function (Blueprint $table) {
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('no_akta_lahir')->nullable();
            $table->string('religion')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('special_needs')->nullable();
            $table->string('residence_type')->nullable();
            $table->string('transportation')->nullable();
            $table->integer('child_order')->nullable();
            $table->boolean('has_kip')->default(false);
            $table->boolean('will_receive_kip')->nullable();
            $table->string('kip_reject_reason')->nullable();
            $table->string('kk_file')->nullable();
            $table->string('kip_file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
