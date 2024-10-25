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
        Schema::create('wholesales', function (Blueprint $table) {
            $table->id();
            $table->string('wholesale_company');
            $table->string('wholesale_contact_1')->nullable();
            $table->string('wholesale_contact_2')->nullable();
            $table->string('wholesale_contact_3')->nullable();
            $table->string('wholesale_website')->nullable();
            $table->string('wholesale_username')->nullable();
            $table->string('wholesale_password')->nullable();
            $table->string('wholesale_mobil')->nullable();
            $table->string('wholesale_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wholesales');
    }
};
