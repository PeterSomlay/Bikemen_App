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
        Schema::create('discbrakes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->string("discbrake_name");
            $table->string("discbrake_oil")->nullable();
            $table->string("discbrake_number")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discbrakes');
    }
};
