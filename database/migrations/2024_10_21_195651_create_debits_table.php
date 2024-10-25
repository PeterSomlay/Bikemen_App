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
        Schema::create('debits', function (Blueprint $table) {
            $table->id();
            $table->date("debit_date");
            $table->foreignId("customer_id");
            $table->foreign("customer_id")->references("id")->on("customers");
            $table->bigInteger("debit_cash");
            $table->foreignId("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debits');
    }
};
