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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worksheet_id");
            $table->foreign("worksheet_id")->references("id")->on("worksheets");
            $table->foreignId("mechanic_id");
            $table->foreign("mechanic_id")->references("id")->on("mechanics");
            $table->bigInteger("all_parts");
            $table->bigInteger("all_work");
            $table->bigInteger("all_price");
            $table->longText("repair_document");
            $table->date("finish_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
