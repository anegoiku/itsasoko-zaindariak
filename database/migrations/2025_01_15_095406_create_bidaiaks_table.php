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
        Schema::create('bidaiaks', function (Blueprint $table) {
            $table->id();
            $table->string('helmuga');
            $table->date('hasiera');
            $table->date('amaiera');
            $table->int('id_tripulante');
            $table->timestamps();
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
