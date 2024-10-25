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
        Schema::create('accountants', function (Blueprint $table) {
            $table->id();
            $table->date("accountant_year");
            $table->string("accountant_period");
            $table->string("accountant_month_number");
            $table->bigInteger("accountant_day_number");
            $table->date("accountant_date");
            $table->bigInteger("accountant_voucher_number");
            $table->string("accountant_name");
            $table->bigInteger("accountant_income");
            $table->bigInteger("accountant_expense");
            $table->bigInteger("accountant_balance");
            $table->bigInteger("accountant_card");
            $table->bigInteger("accountant_all");
            $table->bigInteger("accountant_traffic");
            $table->bigInteger("accountant_open_cassa");
            $table->bigInteger("accountant_closed_cassa");
            $table->string("accountant_firm");
            $table->string("accountant_sign");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accountants');
    }
};
