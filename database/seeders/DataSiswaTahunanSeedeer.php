<?php

namespace Database\Seeders;
use App\Models\data_siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSiswaTahunanSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = data_siswa::create([
            'tahun' => '2019',
            'jumlahsiswa' => '237',
        ]);

        $data2 = data_siswa::create([
            'tahun' => '2020',
            'jumlahsiswa' => '166',
        ]);

        $data3 = data_siswa::create([
            'tahun' => '2021',
            'jumlahsiswa' => '180',
        ]);

        $data4 = data_siswa::create([
            'tahun' => '2022',
            'jumlahsiswa' => '152',
        ]);

        $data5 = data_siswa::create([
            'tahun' => '2023',
            'jumlahsiswa' => '129',
        ]);
    }
}
