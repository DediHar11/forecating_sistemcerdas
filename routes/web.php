<?php

use App\Http\Controllers\DatapertahunController;
use App\Models\datasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\PeramalanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataperjurusanController;
use App\Http\Controllers\PeramalanJurusanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('utama');
});



//Kode Jurusan:
//a = akuntansi
//b = Teknik Kendaraan Ringan Otomotif
//c = Teknik dan Bisnis Sepeda Motor
//d = Teknik Audio Video
//e = Teknik Komputer dan Jaringan
//f = Multimedia


// Route::get('/dashboard', function () {
//     return view('beranda',
//             ['a'=> datasiswa::where('jurusan','Akuntansi')->sum('jumlahsiswa'),
//             'b'=> datasiswa::where('jurusan', 'Teknik Kendaraan Ringan Otomotif')->sum('jumlahsiswa'),
//             'c'=> datasiswa::where('jurusan', 'Teknik dan Bisnis Sepeda Motor')->sum('jumlahsiswa'),
//             'd'=> datasiswa::where('jurusan', 'Teknik Audio Video')->sum('jumlahsiswa'),
//             'e'=> datasiswa::where('jurusan', 'Teknik Komputer dan Jaringan')->sum('jumlahsiswa'),
//             'f'=> datasiswa::where('jurusan', 'Multimedia')->sum('jumlahsiswa'),
//             ]
//     );
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    // Route::resource('datasiswa',DatasiswaController::class);
    Route::resource('peramalan',PeramalanController::class);
    Route::resource('jurusan', DataperjurusanController::class);
    Route::resource('datapertahun',DatapertahunController::class);
    Route::resource('peramalan-jurusan', PeramalanJurusanController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
