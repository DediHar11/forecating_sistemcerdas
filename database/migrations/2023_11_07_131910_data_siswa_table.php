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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id(); // Kolom "id" sebagai auto-increment
            $table->year('tahun');
            $table->integer('jumlahsiswa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
