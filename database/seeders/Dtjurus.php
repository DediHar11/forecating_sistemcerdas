<?php

namespace Database\Seeders;

use App\Models\Datajurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dtjurus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = Datajurusan::create([
            'tahun'  => '2019',
            'otomotif'  => '135',
            'media'  => '38',
            'tk'  => '35',
            'mb'  => '14',
            'ak'  => '15',
        ]);
        $data2 = Datajurusan::create([
            'tahun'  => '2020',
            'otomotif'  => '99',
            'media'  => '14',
            'tk'  => '35',
            'mb'  => '11',
            'ak'  => '7',
        ]);
        $data3 = Datajurusan::create([
            'tahun'  => '2021',
            'otomotif'  => '105',
            'media'  => '11',
            'tk'  => '36',
            'mb'  => '17',
            'ak'  => '11',
        ]);
        $data4 = Datajurusan::create([
            'tahun'  => '2022',
            'otomotif'  => '76',
            'media'  => '30',
            'tk'  => '26',
            'mb'  => '7',
            'ak'  => '13',
        ]);
        $data5 = Datajurusan::create([
            'tahun'  => '2023',
            'otomotif'  => '70',
            'media'  => '16',
            'tk'  => '26',
            'mb'  => '11',
            'ak'  => '6',
        ]);
    }
}
