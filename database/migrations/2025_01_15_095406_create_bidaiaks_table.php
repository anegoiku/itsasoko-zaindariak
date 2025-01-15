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
        Schema::create('bidaiak', function (Blueprint $table) {
            $table->id();
            $table->string('helmuga');
            $table->date('hasiera');
            $table->date('amaiera');
            $table->unsignedBigInteger('id_tripulante');
            $table->timestamps();

            $table->foreign('id_tripulante')
                  ->references('id')
                  ->on('tripulantes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidaiaks');
    }
};
