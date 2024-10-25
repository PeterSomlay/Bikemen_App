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
        Schema::create('bicycles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("frame_id");
            $table->foreign("frame_id")->references("id")->on("frames");
            $table->foreignId("fork_id");
            $table->foreign("fork_id")->references("id")->on("forks");
            $table->foreignId("rear_shock_id");
            $table->foreign("rear_shock_id")->references("id")->on("rear_shocks");
            $table->foreignId("dropper_post_id");
            $table->foreign("dropper_post_id")->references("id")->on("dropper_posts");
            $table->foreignId("wheels_id");
            $table->foreign("wheels_id")->references("id")->on("wheels");
            $table->foreignId("discbrake_id");
            $table->foreign("discbrake_id")->references("id")->on("discbrakes");
            $table->foreignId("emotor_id");
            $table->foreign("emotor_id")->references("id")->on("emotors");
            $table->foreignId("eshifter_id");
            $table->foreign("eshifter_id")->references("id")->on("eshifters");
            $table->foreignId("geared_hub_id");
            $table->foreign("geared_hub_id")->references("id")->on("geared_hubs");
            $table->text("recognizance")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicycles');
    }
};
