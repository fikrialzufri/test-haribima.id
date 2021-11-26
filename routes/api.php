<?php

use App\Http\Controllers\KaryawanController;
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

Route::get('karyawan', [KaryawanController::class, 'index']);
Route::post('karyawan', [KaryawanController::class, 'store']);
Route::put('karyawan/{karyawan}', [KaryawanController::class, 'update']);
Route::delete('karyawan/{karyawan}', [KaryawanController::class, 'destroy']);
