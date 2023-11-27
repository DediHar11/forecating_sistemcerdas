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
        Schema::create('data_jurusan', function (Blueprint $table) {
            $table->id('id_jurusan'); // Kolom "id" sebagai auto-increment
            $table->string('nama_jurusan'); // Kolom "nama_jurusan" sebagai string
            $table->timestamps(); // Kolom waktu pembuatan dan pembaruan
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
