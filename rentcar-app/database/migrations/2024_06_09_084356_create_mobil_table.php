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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merek_id');
            $table->string('model');
            $table->date('tahun');
            $table->string('warna');
            $table->string('no_pol');
            $table->string('status');
            $table->string('harga_sewa');
            $table->foreign('merek_id')->references('id')->on('merek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};