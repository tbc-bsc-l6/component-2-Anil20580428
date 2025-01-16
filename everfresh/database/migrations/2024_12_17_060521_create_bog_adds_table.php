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
        Schema::create('bog_adds', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('date');
            $table->string('profile');
            $table->string('heading');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bog_adds');
    }
};
