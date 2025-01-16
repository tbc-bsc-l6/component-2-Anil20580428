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
        Schema::create('our_project_floorings', function (Blueprint $table) {
            $table->id();
            $table->string('projectType');
            $table->string('title');
            $table->string('name');
            $table->string('description');
            $table->string('date');
            $table->string('author')->nullable();
            $table->string('category');
            $table->string('website');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_project_floorings');
    }
};
