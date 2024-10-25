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
        Schema::create('blue_cash_registers', function (Blueprint $table) {
            $table->id();
            $table->date("blue_cassa_date");
            $table->string("blue_cassa_comment");
            $table->bigInteger("blue_cassa_price");
            $table->string("blue_cassa_exp_rev");
            $table->bigInteger("blue_cassa_in");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blue_cash_registers');
    }
};
