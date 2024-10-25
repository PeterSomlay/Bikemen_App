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
        Schema::create('expert_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
            $table->foreignId("customer_part_id");
            $table->foreign("customer_part_id")->references("id")->on("customer_parts");
            $table->foreignId("mechanic_id");
            $table->foreign("mechanic_id")->references("id")->on("mechanics");
            $table->string("expert_report_damage");
            $table->bigInteger("expert_report_fixed_price");
            $table->bigInteger("expert_report_fixed_parts_price");
            $table->string("expert_report_comment");
            $table->date("bring_date");
            $table->date("promise_date");
            $table->enum("work_status",[1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
            $table->enum("call_status",[1,2,3,4,5,6]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_reports');
    }
};
