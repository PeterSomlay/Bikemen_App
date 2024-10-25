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
        Schema::create('parts_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worksheet_id");
            $table->foreign("worksheet_id")->references("id")->on("worksheets");
            $table->foreignId("repair_id");
            $table->foreign("repair_id")->references("id")->on("repairs");
            $table->bigInteger("part_1");
            $table->bigInteger("part_2");
            $table->bigInteger("part_3");
            $table->bigInteger("part_4");
            $table->bigInteger("part_5");
            $table->bigInteger("part_6");
            $table->bigInteger("part_7");
            $table->bigInteger("part_8");
            $table->bigInteger("part_9");
            $table->bigInteger("part_10");
            $table->bigInteger("part_11");
            $table->bigInteger("part_12");
            $table->bigInteger("part_13");
            $table->bigInteger("part_14");
            $table->bigInteger("part_15");
            $table->bigInteger("part_16");
            $table->bigInteger("part_17");
            $table->bigInteger("part_18");
            $table->bigInteger("part_19");
            $table->bigInteger("part_20");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_prices');
    }
};
