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
        Schema::create('our_plan_toures', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('planType');
            $table->string('feature');
            $table->string('cleaning');
            $table->string('moving');
            $table->string('calling');
            $table->string('work');
            $table->string('suggestion');
            $table->string('enhancedsecurity')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_plan_toures');
    }
};
