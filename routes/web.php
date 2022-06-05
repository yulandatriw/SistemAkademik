<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/blog1', function () {
    return view('backend.user.blog1');
});
Route::get('/blog2', function () {
    return view('backend.user.blog2');
});
Route::get('/blog3', function () {
    return view('backend.user.blog3');
});
Route::get('/tentang', function () {
    return view('backend.user.tentang');
});
Route::get('/akademik', function () {
    return view('backend.user.akademik');
});

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'admin'])->name('home');
    Route::get('/homeuser', [HomeUserController::class, 'user'])->name('homeuser');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('/flights', function () {
    //     // Only authenticated users may access this route...

    // })->middleware('auth:admin');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', function () {
        return view('backend.admin.admin');
    });

    Route::get('/admin/departemen', function () {
        return view('backend.departemen.index');
    });

    Route::get('/admin/proyek', function () {
        return view('backend.proyek.index');
    });

    Route::get('/admin/pekerja-proyek', function () {
        return view('backend.pekerja-proyek.index');
    });

    /* Cek Menu Pegawai */
    Route::get('/admin/pegawai', 'PegawaiController@index');
    Route::get('/admin/pegawai/add', 'PegawaiController@add');
    Route::post('/admin/pegawai/add', 'PegawaiController@processAdd');
    Route::get('/admin/pegawai/update/{nip}', 'PegawaiController@update');
    Route::post('/admin/pegawai/update/{nip}', 'PegawaiController@processUpdate');
    Route::get('/admin/pegawai/delete/{nip}', 'PegawaiController@delete');

    /* Cek Menu Pekerja Proyek */
    Route::get('/admin/pekerja_proyek', 'PekerjaProyekController@index');
    Route::get('/admin/pekerja_proyek/add', 'PekerjaProyekController@add');
    Route::post('/admin/pekerja_proyek/add', 'PekerjaProyekController@processAdd');
    Route::get('/admin/pekerja_proyek/update/{id}', 'PekerjaProyekController@update');
    Route::post('/admin/pekerja_proyek/update/{id}', 'PekerjaProyekController@processUpdate');
    Route::get('/admin/pekerja_proyek/delete/{id}', 'PekerjaProyekController@delete');


    /* Cek Menu Mahasiswa */
    Route::get('/admin/mahasiswa', 'MahasiswaController@index');
    Route::get('/admin/mahasiswa/add', 'MahasiswaController@add');
    Route::post('/admin/mahasiswa/add', 'MahasiswaController@processAdd');
    Route::get('/admin/mahasiswa/update/{nim}', 'MahasiswaController@update');
    Route::post('/admin/mahasiswa/update/{nim}', 'MahasiswaController@processUpdate');
    Route::get('/admin/mahasiswa/delete/{nim}', 'MahasiswaController@delete');

    /* Cek Menu Mata Kuliah */
    Route::get('/admin/matakuliah', 'matakuliahController@index');
    Route::get('/akademik', 'matakuliahController@tampil');
    Route::get('/admin/matakuliah/add', 'matakuliahController@add');
    Route::post('/admin/matakuliah/add', 'matakuliahController@processAdd');
    Route::get('/admin/matakuliah/update/{nim}', 'matakuliahController@update');
    Route::post('/admin/matakuliah/update/{nim}', 'matakuliahController@processUpdate');
    Route::get('/admin/matakuliah/delete/{nim}', 'MahasiswaController@delete');

    /* Cek Menu Kelas */
    Route::get('/admin/kelas', 'kelasController@index');
    Route::get('/admin/kelas/add', 'kelasController@add');
    Route::post('/admin/kelas/add', 'kelasController@processAdd');
    Route::get('/admin/kelas/update/{nim}', 'kelasController@update');
    Route::post('/admin/kelas/update/{nim}', 'kelasController@processUpdate');
    Route::get('/admin/kelas/delete/{nim}', 'kelasController@delete');


    /* Cek Menu Nilai */
    Route::get('/admin/nilai', 'nilaiController@index');
    Route::get('/admin/nilai/add', 'nilaiController@add');
    Route::post('/admin/nilai/add', 'nilaiController@processAdd');
    Route::get('/admin/nilai/update/{id}', 'nilaiController@update');
    Route::post('/admin/nilai/update/{id}', 'nilaiController@processUpdate');
    Route::get('/admin/nilai/delete/{id}', 'nilaiController@delete');
});
