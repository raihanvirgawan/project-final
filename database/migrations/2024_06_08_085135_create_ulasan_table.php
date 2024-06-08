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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->string('ulasan');

            $table->unsignedBigInteger('kostumer_id');
            $table->foreign('kostumer_id')->references('id')->on('kostumer');

            $table->unsignedBigInteger('kamera_id');
            $table->foreign('kamera_id')->references('id')->on('kamera');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
