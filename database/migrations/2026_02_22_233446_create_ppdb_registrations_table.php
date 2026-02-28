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
        Schema::create('ppdb_registrations', function (Blueprint $table) {
            $table->id();

            $table->string('student_name');
            $table->enum('gender', ['L', 'P']);
            $table->date('birth_date')->nullable();

            $table->string('parent_name');
            $table->string('phone');
            $table->text('address')->nullable();

            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('admin_note')->nullable();

            $table->timestamps();

            $table->index('status');
            $table->index('student_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_registrations');
    }
};
