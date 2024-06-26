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
        Schema::create('kamera', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor seri');
            $table->integer('tahun keluar');
            $table->string('merek');

            $table->unsignedBigInteger('kostumer_id');
            $table->foreign('kostumer_id')->references('id')->on('kostumer');

            $table->unsignedBigInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->on('jenis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamera');
    }
};
