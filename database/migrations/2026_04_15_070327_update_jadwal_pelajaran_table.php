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
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->foreignId('teacher_id')->nullable()->after('id');
            $table->foreignId('subject_id')->nullable()->after('teacher_id');
            $table->foreignId('school_class_id')->nullable()->after('subject_id');
        });
    }

    public function down(): void
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->dropColumn(['teacher_id', 'subject_id', 'school_class_id']);
        });
    }
};
