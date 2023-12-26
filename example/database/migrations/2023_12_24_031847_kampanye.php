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
        Schema::create('galang_dana_models', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('namaKTP');
            $table->integer('noTelfon');
            $table->string('status');
            $table->string('akunMedsos');
            $table->string('judulKampanye');
            $table->string('Tujuan');
            $table->string('Lokasi');
            $table->string('perkiraanWaktu');
            $table->string('rincianPenggunaanDana');
            $table->string('fotoGalangDana');
            $table->string('fotoKTP');
            $table->string('berkasLainnya');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galang_dana_models');
    }
};
