<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('index',[
        'Nama' => 'Erick Laurianto',
        'StudentID' => '03081200002',
        'Term' => '1212'
    ]);
});

Route::controller(MahasiswaController::class)->group(function() {
    Route::get('mahasiswa','index');
    Route::get('mahasiswa/{id}','show');
    Route::post('mahasiswa','store');
    Route::get('mahasiswa/new','create');
    Route::delete('mahasiswa/{id}','destroy');
    Route::get('mahasiswa/{id}','edit');
    Route::put('mahasiswa/{id}','update');
});

Route::resource('admin/dosen', 'App\Http\Controllers\Admin\DosenController');
Route::resource('admin/matakuliah', 'App\Http\Controllers\Admin\matakuliahController');