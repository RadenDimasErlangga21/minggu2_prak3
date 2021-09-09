<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//praktikum 3 - 1 (halaman home)
Route:: get('/',[PageController::class,'halamanHome']);

//praktikum 3 - 2 (halaman program studi prefix)
Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', function(){
        return "Jurusan Manajemen Informatika";
    });
    Route::get('/teknik-informatika', function(){
        return "Jurusan Teknnik informatika";
    });
});

//praktikum 3 - 3 (halaman news param + controller)
Route:: get('news/{id}',[PageController::class,'halamannews']);

//praktikum 3 - 4 (halaman sarana prefic)
Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', function(){
        return "ruangan perkantoran";
    });
    Route::get('/laboratorium', function(){
        return "ruangan laboratorium";
    });
    Route::get('/kelas', function(){
        return "ruangan kelas";
    });
    Route::get('/lainnya', function(){
        return "sarana lain-lain...";
    });
});

//praktikum 3 - 5 (about)
Route::get('aboutus', function(){
    echo "[2031710121] Raden Dimas Erlangga";
});

//praktikum 3 - 6 (halaman comment + controller)
Route:: get('{nama}/{id}',[PageController::class,'halamancomment']);