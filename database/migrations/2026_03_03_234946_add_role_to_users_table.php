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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('guru');
            $table->foreignId('teacher_staff_id')
                ->nullable()
                ->constrained('teacher_staff')
                ->nullOnDelete();
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {   
            $table->dropForeign(['teacher_staff_id']);
            $table->dropColumn('teacher_staff_id');
            $table->dropColumn('role');
            $table->dropColumn('is_active');
        });
    }
};
