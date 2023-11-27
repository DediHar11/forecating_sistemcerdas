<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_jurusan as Jurusan;
use App\Models\data_siswa_jurusan as JumlahSiswa;

class PeramalanJurusanController extends Controller
{

    public function test() {
        return view('menu.peramalanjurusan');
    }

    public function index(Request $request) {
        $jurusanSelected = $request->input('jurusan');
        $idJurusan = Jurusan::where('nama_jurusan', $jurusanSelected)->pluck('id_jurusan');
        $tahunSelected = $request->input('tahun');
        $jurusan = Jurusan::all();
        $year = JumlahSiswa::select('tahun')->distinct()->pluck('tahun')->sort();
        $n = count($year);
        $x = [];
        for ($i = 1; $i <= $n; $i++) {
            $x[] = $i;
        };
        $y = JumlahSiswa::where('id_jurusan', $jurusanSelected == null ? 1 : $idJurusan)->pluck('jumlah_siswa');
        $jumlahX = array_sum($x);
        $jumlahY = $y->sum();
        $jumlahXY = $y->map(function ($item, $key) use ($x) {
            return $item * $x[$key];
        })->sum();
        $jumlahX2 = array_sum(array_map(function ($key) {
            return pow($key, 2);
        }, $x));
        $b =  ($n * $jumlahXY - $jumlahX * $jumlahY) / ($n * $jumlahX2 - pow($jumlahX, 2) );
        $a = ($jumlahY - $b * $jumlahX) / $n;

        $dataForecast = [];
        for ($i = 1; $i <= $n; $i++) {
            $forecast = $a + $b * $i;
            $dataForecast[] = $forecast;
        }

        $selisih = $y->map(function ($item, $key) use ($dataForecast) {
            return abs($item - $dataForecast[$key]); 
        });

        $jumlahSelisih = $selisih->sum();

        $tahun_pertama = JumlahSiswa::min('tahun');

        $caridata = ($tahunSelected !== null) ? $tahunSelected - $tahun_pertama + 1 : null;

        $mape = number_format($y->map(function ($item, $key) use ($selisih) {
            return ($selisih[$key] /$item);
        })->sum()*100 / $n, 2);

        return view('menu.peramalanjurusan', compact('jurusan', 'year', 'n', 'x', 'y', 'a', 'b', 'jumlahXY', 'jumlahX', 'jumlahY', 'jumlahX2', 'jumlahSelisih', 'dataForecast', 'caridata', 'tahunSelected', 'jurusanSelected', 'idJurusan', 'mape'));
    }
}
