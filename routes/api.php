<?php

use App\Http\Controllers\ApiKelas;
use App\Http\Controllers\ApiMahasiswa;
use App\Http\Controllers\ApiProyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/proyek', [ApiProyek::class, 'index']);
Route::post('/proyek/add', [ApiProyek::class, 'add']);
Route::get('/proyek/show/{id}', [ApiProyek::class, 'show']);
Route::put('/proyek/update/{id}', [ApiProyek::class, 'update']);
Route::delete('/proyek/delete/{id}', [ApiProyek::class, 'delete']);

Route::get('/mahasiswa', [ApiMahasiswa::class, 'index']);
Route::post('/mahasiswa/add', [ApiMahasiswa::class, 'add']);
Route::get('/mahasiswa/show/{id}', [ApiMahasiswa::class, 'show']);
Route::put('/mahasiswa/update/{id}', [ApiMahasiswa::class, 'update']);
Route::delete('/mahasiswa/delete/{id}', [ApiMahasiswa::class, 'delete']);

Route::get('/matakuliah', [ApiMatakuliah::class, 'index']);
Route::post('/matakuliah/add', [ApiMatakuliah::class, 'add']);
Route::get('/matakuliah/show/{id}', [ApiMatakuliah::class, 'show']);
Route::put('/matakuliah/update/{id}', [ApiMatakuliah::class, 'update']);
Route::delete('/matakuliah/delete/{id}', [ApiMatakuliah::class, 'delete']);


Route::get('/nilai', [ApiNilai::class, 'index']);
Route::post('/nilai/add', [ApiNilai::class, 'add']);
Route::get('/nilai/show/{id}', [ApiNilai::class, 'show']);
Route::put('/nilai/update/{id}', [ApiNilai::class, 'update']);
Route::delete('/nilai/delete/{id}', [ApiNilai::class, 'delete']);

Route::get('/kelas', [ApiKelas::class, 'index']);
Route::post('/kelas/add', [ApiKelas::class, 'add']);
Route::get('/kelas/show/{id}', [ApiKelas::class, 'show']);
Route::put('/kelas/update/{id}', [ApiKelas::class, 'update']);
Route::delete('/kelas/delete/{id}', [ApiKelas::class, 'delete']);
