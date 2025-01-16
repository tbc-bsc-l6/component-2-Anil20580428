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
        Schema::create('homesliders', function (Blueprint $table) {
            $table->id();
            $table->string('sliderimage');
            $table->string('heading1');
            $table->string('heading2');
            $table->string('description');
            $table->boolean('status')->default(1);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homesliders');
    }
};
