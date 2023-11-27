<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatahun extends Model
{
    use HasFactory;
    protected $table = 'datatahuns';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tahun','jumlah',
    ];
}
