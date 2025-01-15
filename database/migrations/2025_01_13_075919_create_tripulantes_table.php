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
        Schema::create('tripulantes', function (Blueprint $table) {
            $table->id();
            $table->string('izena');
            $table->string('abizena');
            $table->string('rola');
            $table->unsignedBigInteger('id_bidaia');
            $table->timestamps();

            $table->foreign('id_bidaia')
                  ->references('id')
                  ->on('bidaiak')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tripulantes');
    }
};
