<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use Illuminate\Http\Request;

class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $tahun = $request->input('tahun');
        $year = data_siswa::pluck('tahun')->sort()->values()->all();
        $n = data_siswa::count();
        $x = [];
        for ($i = 1; $i <= $n; $i++) {
            $x[] = $i;
        };

        $y = data_siswa::pluck('jumlahsiswa');  

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
        $tahun_pertama = data_siswa::min('tahun');

        $caridata = ($tahun !== null) ? $tahun - $tahun_pertama + 1 : null;

        $mape = number_format($y->map(function ($item, $key) use ($selisih) {
            return ($selisih[$key] /$item);
        })->sum()*100 / $n, 2);


        return view('menu.peramalan',compact('y', 'year', 'x', 'jumlahXY', 'jumlahX2', 'jumlahX', 'jumlahY', 'b', 'a', 'n', 'dataForecast', 'jumlahSelisih', 'caridata', 'tahun', 'mape'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
