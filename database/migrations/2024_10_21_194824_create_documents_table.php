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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->date("documents_date");
            $table->foreignId("worksheet_id");
            $table->foreign("worksheet_id")->references("id")->on("worksheets");
            $table->foreignId("customer_part_id");
            $table->foreign("customer_part_id")->references("id")->on("customer_parts");
            $table->longText("documents");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
