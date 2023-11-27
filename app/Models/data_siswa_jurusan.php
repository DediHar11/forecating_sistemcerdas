<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa_jurusan extends Model
{
    use HasFactory;
    protected $table = 'data_siswa_jurusan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_jurusan', 'jumlah_siswa', 'tahun'
    ];
}
