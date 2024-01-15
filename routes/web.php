<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('siswa/create',
    [SiswaController::class,'create']);
Route::post('siswa/create',
    [SiswaController::class,'store']);

Route::get('siswa/read',
    [SiswaController::class,'index']);

route::get('siswa/{id}',
    [SiswaController::class,'edit']);
route::put('siswa/{id}',
    [SiswaController::class,'update']);

route::delete('siswa/{id}',
    [SiswaController::class,'delete']);