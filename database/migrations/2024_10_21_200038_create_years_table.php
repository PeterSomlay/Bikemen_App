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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->date("year");
            $table->date("year_date");
            $table->string("year_day");
            $table->bigInteger("year_all");
            $table->bigInteger("year_card");
            $table->bigInteger("year_clear_cash");
            $table->bigInteger("year_other");
            $table->bigInteger("year_workprice");
            $table->bigInteger("year_workparts");
            $table->bigInteger("year_parts");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('years');
    }
};
