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
        Schema::create('todays', function (Blueprint $table) {
            $table->id();
            $table->date("today_date");
            $table->string("today_comment");
            $table->bigInteger("today_work");
            $table->bigInteger("today_parts");
            $table->bigInteger("today_parts_price");
            $table->integer("today_parts_piece");
            $table->bigInteger("today_all_price");
            $table->enum("today_card",["Y","N"])->default("N");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todays');
    }
};
