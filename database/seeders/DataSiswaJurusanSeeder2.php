<?php

namespace Database\Seeders;
use App\Models\data_siswa_jurusan as JumlahSiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSiswaJurusanSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahun = [2019, 2020, 2021, 2022, 2023];
        $otomotif = [135, 99, 105, 76, 70];
        $media_desain = [38, 14, 11, 30, 16];
        $tkk = [35, 35, 36, 26, 26];
        $manajemen_bisnis = [14, 11, 17, 7, 11];
        $akuntansi_keuangan = [15, 7, 11, 13, 6];

        $daftar_jurusan = [
            ['id_jurusan' => 1, 'jumlah_siswa' => $otomotif],
            ['id_jurusan' => 2, 'jumlah_siswa' => $media_desain],
            ['id_jurusan' => 3, 'jumlah_siswa' => $tkk],
            ['id_jurusan' => 4, 'jumlah_siswa' => $manajemen_bisnis],
            ['id_jurusan' => 5, 'jumlah_siswa' => $akuntansi_keuangan],
        ];

        for ($i = 0; $i < count($tahun); $i++) {
            foreach ($daftar_jurusan as $data_jurusan) {
                JumlahSiswa::create([
                    'id_jurusan' => $data_jurusan['id_jurusan'],
                    'jumlah_siswa' => $data_jurusan['jumlah_siswa'][$i],
                    'tahun' => $tahun[$i],
                ]);
            }
        }



                

    }
}
