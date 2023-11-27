<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('data_siswa_jurusan', function (Blueprint $table) {
            $table->id(); // Kolom "id" sebagai auto-increment
            $table->unsignedBigInteger('id_jurusan');
            $table->integer('jumlah_siswa');
            $table->year('tahun'); // Kolom tahun
            $table->timestamps();

            $table->foreign('id_jurusan')->references('id_jurusan')->on('data_jurusan'); // Kolom waktu pembuatan dan pembaruan
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
