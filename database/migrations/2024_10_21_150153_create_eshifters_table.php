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
        Schema::create('eshifters', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->string("eshifter_battery")->nullable();
            $table->string("eshifter_rd")->nullable();
            $table->string("eshifter_fd")->nullable();
            $table->string("eshifter_st")->nullable();
            $table->string("eshifter_s_1")->nullable();
            $table->string("eshifter_s_2")->nullable();
            $table->string("eshifter_wire_1")->nullable();
            $table->string("eshifter_wire_2")->nullable();
            $table->string("eshifter_wire_3")->nullable();
            $table->string("eshifter_wire_4")->nullable();
            $table->string("eshifter_wire_5")->nullable();
            $table->string("eshifter_wire_6")->nullable();
            $table->string("eshifter_wireless")->nullable();
            $table->string("eshifter_junction_1")->nullable();
            $table->string("eshifter_junction_2")->nullable();
            $table->string("power_meter")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eshifters');
    }
};
