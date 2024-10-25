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
        Schema::create('work_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worksheet_id");
            $table->foreign("worksheet_id")->references("id")->on("worksheets");
            $table->foreignId("repair_id");
            $table->foreign("repair_id")->references("id")->on("repairs");
            $table->foreignId("expert_report_id");
            $table->foreign("expert_report_id")->references("id")->on("expert_reports");
            $table->bigInteger("work_1");
            $table->bigInteger("work_2");
            $table->bigInteger("work_3");
            $table->bigInteger("work_4");
            $table->bigInteger("work_5");
            $table->bigInteger("work_6");
            $table->bigInteger("work_7");
            $table->bigInteger("work_8");
            $table->bigInteger("work_9");
            $table->bigInteger("work_10");
            $table->bigInteger("work_11");
            $table->bigInteger("work_12");
            $table->bigInteger("work_13");
            $table->bigInteger("work_14");
            $table->bigInteger("work_15");
            $table->bigInteger("work_16");
            $table->bigInteger("work_17");
            $table->bigInteger("work_18");
            $table->bigInteger("work_19");
            $table->bigInteger("work_20");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_prices');
    }
};
