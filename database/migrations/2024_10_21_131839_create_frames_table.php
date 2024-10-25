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
        Schema::create('frames', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('frame_name');
            $table->foreignId('color_id');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->string('frame_number')->nullable();
            $table->float('frame_seatpost_size',precision:53)->nullable();
            $table->integer('frame_bottom_bracket')->nullable();
            $table->string('frame_front_tube')->nullable();
            $table->string('frame_size')->nullable();
            $table->string('headset_bearing_1')->nullable();
            $table->string('headset_bearing_2')->nullable();
            $table->string('frame_bearing_1')->nullable();
            $table->string('frame_bearing_2')->nullable();
            $table->string('frame_bearing_3')->nullable();
            $table->string('frame_bearing_4')->nullable();
            $table->string('frame_bearing_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frames');
    }
};
