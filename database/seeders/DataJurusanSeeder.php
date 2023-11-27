<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\data_jurusan as Jurusan;

class DataJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = Jurusan::create([
            'id_jurusan' => 1,
            'nama_jurusan' => 'otomotif',
        ]);

        $data2 = Jurusan::create([
            'id_jurusan' => 2,
            'nama_jurusan' => 'Media dan Desain',
        ]);

        $data3 = Jurusan::create([
            'id_jurusan' => 3,
            'nama_jurusan' => 'Teknik Komputer',
        ]);

        $data4 = Jurusan::create([
            'id_jurusan' => 4,
            'nama_jurusan' => 'Manajemen Bisnis',
        ]);

        $data5 = Jurusan::create([
            'id_jurusan' => 5,
            'nama_jurusan' => 'Akuntansi dan Keuangan',
        ]);
    }
}
