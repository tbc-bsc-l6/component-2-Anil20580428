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
        Schema::create('sliderlefts', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table ->string('day1');
            $table ->string('day2');
            $table ->string('title');
            $table ->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliderlefts');
    }
};
