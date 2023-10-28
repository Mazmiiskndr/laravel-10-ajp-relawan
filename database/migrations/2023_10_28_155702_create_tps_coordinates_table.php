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
        Schema::create('tps_coordinates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('tps_address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tps_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps_coordinates');
    }
};
