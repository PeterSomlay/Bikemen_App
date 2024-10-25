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
        Schema::create('rear_shocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->string("rear_shock_name");
            $table->string("rear_shock_number")->nullable();
            $table->integer("rear_shock_positive_pressure")->nullable();
            $table->integer("rear_shock_negative_pressure")->nullable();
            $table->integer("rear_shock_low_speed_compression")->nullable();
            $table->integer("rear_shock_high_speed_compression")->nullable();
            $table->integer("rear_shock_low_speed_rebound")->nullable();
            $table->integer("rear_shock_high_speed_rebound")->nullable();
            $table->integer("rear_shock_eyelet")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rear_shocks');
    }
};
