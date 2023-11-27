<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa_jurusan as jurusan;

class DashboardController extends Controller
{
    public function index() {
        $year = Jurusan::select('tahun')->distinct()->pluck('tahun');
        $otomotif = Jurusan::where('id_jurusan', 1)->pluck('jumlah_siswa');
        $a = $otomotif->sum();
        $media_desain = Jurusan::where('id_jurusan', 2)->pluck('jumlah_siswa');
        $b = $media_desain->sum();
        $tkk = Jurusan::where('id_jurusan', 3)->pluck('jumlah_siswa');
        $c = $tkk->sum();
        $manajemen_bisnis = Jurusan::where('id_jurusan', 4)->pluck('jumlah_siswa');
        $d = $manajemen_bisnis->sum();
        $akuntansi_keuangan = Jurusan::where('id_jurusan', 5)->pluck('jumlah_siswa');
        $e = $akuntansi_keuangan->sum();

        return view('beranda', compact('year', 'otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan', 'a', 'b', 'c', 'd', 'e'));
    }
}
