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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('nim', 11);
            $table->string('status', 255);
            $table->string('program_studi', 255);
            $table->string('hobi', 255);
            $table->string('email', 255);
            $table->string('alamat', 255);
            $table->string('no_hp', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
