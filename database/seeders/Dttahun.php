<?php

namespace Database\Seeders;

use App\Models\Datatahun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Dttahun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = Datatahun::create([
            'tahun'  => '2019',
            'jumlah'  => '237',
        ]);
        $data2 = Datatahun::create([
            'tahun'  => '2020',
            'jumlah'  => '166',
        ]);
        $data3 = Datatahun::create([
            'tahun'  => '2021',
            'jumlah'  => '180',
        ]);
        $data4 = Datatahun::create([
            'tahun'  => '2022',
            'jumlah'  => '152',
        ]);
        $data5 = Datatahun::create([
            'tahun'  => '2023',
            'jumlah'  => '129',
        ]);
    }
}
