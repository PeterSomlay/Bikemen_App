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
        Schema::create('forks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('fork_name');
            $table->foreignId('color_id');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->string('fork_number')->nullable();
            $table->integer('fork_positive_pressure')->nullable();
            $table->integer('fork_negative_pressure')->nullable();
            $table->integer('fork_extra_pressure')->nullable();
            $table->integer('fork_low_speed_compression')->nullable();
            $table->integer('fork_high_speed_compression')->nullable();
            $table->integer('fork_low_speed_rebound')->nullable();
            $table->integer('fork_high_speed_rebound')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forks');
    }
};
