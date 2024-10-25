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
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            $table->foreignId("rim_brand_id");
            $table->foreign("rim_brand_id")->references("id")->on("brands");
            $table->string("wheels_rim_name");
            $table->enum("which_wheels_hub",["Első","Hátsó","Agyváltó","Kontra","Első Agymotor","Hátsó Agymotor"]);
            $table->foreignId("hub_brand_id");
            $table->foreign("hub_brand_id")->references("id")->on("brands");
            $table->string("wheels_hub_name");
            $table->string("wheels_hub_number")->nullable();
            $table->integer("wheels_hub_k")->nullable();
            $table->float("wheels_hub_ka", precision: 53)->nullable();
            $table->float("wheels_hub_kb", precision: 53)->nullable();
            $table->float("wheels_hub_d1", precision: 53)->nullable();
            $table->float("wheels_hub_d2", precision: 53)->nullable();
            $table->float("wheels_rim_erd", precision: 53)->nullable();
            $table->integer("wheels_rim_spoke_num_1")->nullable();
            $table->integer("wheels_rim_spoke_num_2")->nullable();
            $table->integer("wheels_rim_spoke_cross_1")->nullable();
            $table->integer("wheels_rim_spoke_cross_2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wheels');
    }
};
