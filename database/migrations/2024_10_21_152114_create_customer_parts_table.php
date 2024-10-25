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
        Schema::create('customer_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id");
            $table->foreign("customer_id")->references("id")->on("customers");
            $table->foreignId("frame_id");
            $table->foreign("frame_id")->references("id")->on("frames");
            $table->foreignId("fork_id");
            $table->foreign("fork_id")->references("id")->on("forks");
            $table->foreignId("rear_shock_id");
            $table->foreign("rear_shock_id")->references("id")->on("rear_shocks");
            $table->foreignId("dropper_post_id");
            $table->foreign("dropper_post_id")->references("id")->on("dropper_posts");
            $table->foreignId("wheel_id");
            $table->foreign("wheel_id")->references("id")->on("wheels");
            $table->foreignId("bicycle_id");
            $table->foreign("bicycle_id")->references("id")->on("bicycles");
            $table->foreignId("discbrake_id");
            $table->foreign("discbrake_id")->references("id")->on("discbrakes");
            $table->foreignId("emotor_id");
            $table->foreign("emotor_id")->references("id")->on("emotors");
            $table->foreignId("eshifter_id");
            $table->foreign("eshifter_id")->references("id")->on("eshifters");
            $table->foreignId("scooter_id");
            $table->foreign("scooter_id")->references("id")->on("scooters");
            $table->foreignId("geared_hub_id");
            $table->foreign("geared_hub_id")->references("id")->on("geared_hubs");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_parts');
    }
};
