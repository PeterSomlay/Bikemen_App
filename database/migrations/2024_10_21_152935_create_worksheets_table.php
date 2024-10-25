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
        Schema::create('worksheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
            $table->foreignId("customer_id");
            $table->foreign("customer_id")->references("id")->on("customers");
            $table->foreignId("customer_part_id");
            $table->foreign("customer_part_id")->references("id")->on("customer_parts");
            $table->string("errors_description");
            //$table->foreignId("repair_id");                                       Ezeket a sorokat később kell hozzáadni, mert még nincs repair tábla !
            //$table->foreign("repair_id")->references("id")->on("repairs");
            $table->date("bring_date");
            $table->date("promise_date");
            $table->enum("work_status",[1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
            $table->enum("call-status",[1,2,3,4,5,6]);
            $table->enum("pay_status",[1,2,3,4,5,6]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worksheets');
    }
};
