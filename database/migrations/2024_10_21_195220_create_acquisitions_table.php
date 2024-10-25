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
        Schema::create('acquisitions', function (Blueprint $table) {
            $table->id();
            $table->date("acquisition_date");
            $table->string("acquisition_comment");
            $table->string("acquisition_parts");
            $table->integer("acquisition_piece");
            $table->string("acquisition_username");
            $table->string("acquisition_mobil");
            $table->foreignId("wholesale_id");
            $table->foreign("wholesale_id")->references("id")->on("wholesales");
            $table->foreignId("worker_id");
            $table->foreign("worker_id")->references("id")->on("Workers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquisitions');
    }
};
