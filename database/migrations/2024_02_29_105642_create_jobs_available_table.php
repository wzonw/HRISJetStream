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
        Schema::create('jobs_available', function (Blueprint $table) {
                $table->id();
                $table->string('job_name');
                $table->string('status');
                $table->string('college');
                $table->string('job_desc');
                $table->string('dept');
                $table->string('salary');
                $table->string('deadline');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_available');
    }
};
