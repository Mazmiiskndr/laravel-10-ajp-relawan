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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreignId('tps_coordinate_id')->references('id')->on('tps_coordinates')->onDelete('cascade');
            $table->char('nik', 16)->unique();
            $table->string('nkk');
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('source');
            $table->string('flag')->nullable();
            $table->string('coordinator')->nullable();
            $table->boolean('is_agree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
