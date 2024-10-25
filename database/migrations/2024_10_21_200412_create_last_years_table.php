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
        Schema::create('last_years', function (Blueprint $table) {
            $table->id();
            $table->date("year");
            $table->bigInteger("january");
            $table->bigInteger("february");
            $table->bigInteger("march");
            $table->bigInteger("april");
            $table->bigInteger("may");
            $table->bigInteger("june");
            $table->bigInteger("july");
            $table->bigInteger("august");
            $table->bigInteger("september");
            $table->bigInteger("october");
            $table->bigInteger("november");
            $table->bigInteger("december");
            $table->bigInteger("last_year_all");
            $table->bigInteger("last_year_avarange");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_years');
    }
};
