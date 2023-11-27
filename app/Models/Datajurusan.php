<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datajurusan extends Model
{
    use HasFactory;
    protected $table = 'datajurusans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tahun','otomotif','media','tk','mb','ak'
    ];
}
