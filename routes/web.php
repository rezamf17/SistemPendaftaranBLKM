<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\UserFormulirController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\HasilSurveyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DependentDropdownController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/prasyarat', function () {
    return view('prasyarat');
});
Route::get('/berita', [PengumumanController::class, 'utama']);
Route::post('/daftar', [RegisterController::class, 'daftar'])->name('daftar');
Auth::routes();

Route::group(['middleware' => ['auth', 'role:1']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('KelolaAkun', UserController::class);
    Route::resource('Formulir', FormulirController::class);
    Route::resource('Pengumuman', PengumumanController::class);
    Route::resource('Seleksi', SeleksiController::class);
    // Report
    Route::get('Formulir/exports/{id}', [FormulirController::class, 'DataUserReport']);
    Route::post('ViewAbsensi/{id}', [ReportController::class, 'ViewAbsensi']);
    Route::post('LaporanAbsensi', [ReportController::class, 'LaporanAbsensi']);
    Route::post('ViewAbsensiUndangan', [ReportController::class, 'ViewAbsensiUndangan']);
    Route::post('LaporanAbsensiUndangan', [ReportController::class, 'LaporanAbsensiUndangan']);
    Route::post('ViewTandaTerimaSertifikat/{id}', [ReportController::class, 'ViewTandaTerimaSertifikat']);
    Route::post('LaporanTandaTerimaSertifikat', [ReportController::class, 'LaporanTandaTerimaSertifikat']);
    Route::post('ViewTandaTerimaPerlengkapan', [ReportController::class, 'ViewTandaTerimaPerlengkapan']);
    Route::post('LaporanTandaTerimaPerlengkapan', [ReportController::class, 'LaporanTandaTerimaPerlengkapan']);
    Route::post('ViewTandaTerimaHasilPraktik', [ReportController::class, 'ViewTandaTerimaHasilPraktik']);
    Route::post('LaporanTandaTerimaHasilPraktik', [ReportController::class, 'LaporanTandaTerimaHasilPraktik']);
    Route::post('ViewTandaTerimaObat/{id}', [ReportController::class, 'ViewTandaTerimaObat']);
    Route::post('LaporanTandaTerimaObat', [ReportController::class, 'LaporanTandaTerimaObat']);
     Route::post('ViewTandaTerimaBahan/{id}', [ReportController::class, 'ViewTandaTerimaBahan']);
    Route::post('LaporanTandaTerimaBahan', [ReportController::class, 'LaporanTandaTerimaBahan']);
     Route::post('ViewTandaTerimaBahanMateri', [ReportController::class, 'ViewTandaTerimaBahanMateri']);
    Route::post('LaporanTandaTerimaBahanMateri', [ReportController::class, 'LaporanTandaTerimaBahanMateri']);
     Route::post('ViewDaftarHadirPermakanan', [ReportController::class, 'ViewDaftarHadirPermakanan']);
    Route::post('LaporanDaftarHadirPermakanan', [ReportController::class, 'LaporanDaftarHadirPermakanan']);
     Route::post('ViewDaftarHadirPelajaran', [ReportController::class, 'ViewDaftarHadirPelajaran']);
    Route::post('LaporanDaftarHadirPelajaran', [ReportController::class, 'LaporanDaftarHadirPelajaran']);
     Route::post('ViewDaftarNominatif', [ReportController::class, 'ViewDaftarNominatif']);
    Route::post('LaporanDaftarNominatif', [ReportController::class, 'LaporanDaftarNominatif']);
    Route::post('ViewSertifikat/{id}', [ReportController::class, 'ViewSertifikat']);
    Route::post('LaporanSertifikat/{id}', [ReportController::class, 'LaporanSertifikat']);
    Route::post('LaporanSeleksi', [ReportController::class, 'LaporanSeleksi']);
    // Route::post('LaporanDaftarHadir', [ReportController::class, 'LaporanDaftarHadir']);
    // End Report
    Route::get('Survey', [HasilSurveyController::class, 'index']);
    Route::get('JawabanSurvey/{id}', [HasilSurveyController::class, 'jawabanSurvey']);
    Route::get('Laporan', [ReportController::class, 'index']);
    Route::post('SeleksiData', [SeleksiController::class, 'seleksi']);
    Route::post('simpanSeleksiData', [SeleksiController::class, 'simpanSeleksi']);
    Route::post('lihatSeleksiData/{id}', [SeleksiController::class, 'lihatSimpanSeleksi']);
    Route::patch('gantiSemuaStatus/{id}', [SeleksiController::class, 'gantiSemuaStatus']);
    Route::patch('gantiSemuaHasilStatus/{id}', [SeleksiController::class, 'gantiSemuaHasilStatus']);
    Route::patch('deleteSeleksi/{id}', [SeleksiController::class, 'destroy']);
    Route::put('Formulir/GantiStatus/{id_user}', [FormulirController::class, 'gantiStatus']);
});

Route::group(['middleware' => ['auth', 'role:2']], function() {
    Route::get('/user', [HomeController::class, 'user'])->name('user');
    Route::resource('UserFormulir', UserFormulirController::class);
    Route::get('UserFormulir/lengkapi/{id}', [UserFormulirController::class, 'lengkapi']);
    Route::put('UserFormulir/lengkapi/{id}', [UserFormulirController::class, 'UpdateLengkapi']);
    Route::resource('UserFormulir', UserFormulirController::class);
    Route::resource('Kuesioner', KuesionerController::class);
});
Route::get('/dropdown', [HomeController::class,'render_dropdown']);
Route::get('provinces', [DependentDropdownController::class, 'provinces'])->name('provinces');
Route::get('cities', [DependentDropdownController::class, 'cities'])->name('cities');
Route::get('districts', [DependentDropdownController::class, 'districts'])->name('districts');
Route::get('villages', [DependentDropdownController::class, 'villages'])->name('villages');
