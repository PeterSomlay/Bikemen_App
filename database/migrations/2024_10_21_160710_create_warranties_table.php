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
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
            $table->string("warranty_parts");
            $table->foreignId("customer_id");
            $table->foreign("customer_id")->references("id")->on("customers");
            $table->foreignId("mechanic_id");
            $table->foreign("mechanic_id")->references("id")->on("mechanics");
            $table->foreignId("wholesale_id");
            $table->foreign("wholesale_id")->references("id")->on("wholesales");
            $table->string("warranty_report");
            $table->date("warranty_shopping_date");
            $table->string("warranty_comment");
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
        Schema::dropIfExists('warranties');
    }
};
