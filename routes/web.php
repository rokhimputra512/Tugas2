<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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
    return view('dashboard');
});
Route::get('/', [KaryawanController::class, 'index1']);
Route::get('/api/karyawan', [KaryawanController::class, 'index']);
Route::post('/api/karyawan/search', [KaryawanController::class, 'search']);
Route::post('/api/karyawan/{NIP}', [KaryawanController::class, 'update']);
Route::post('/api/karyawan-tambah', [KaryawanController::class, 'store']);
Route::delete('/api/karyawan/{NIP}', [KaryawanController::class, 'destroy']);
