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
        Schema::create('emotors', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->string("emotor_name");
            $table->string("emotor_number")->nullable();
            $table->string("emotor_display")->nullable();
            $table->string("emotor_assist")->nullable();
            $table->string("emotor_battery")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emotors');
    }
};
