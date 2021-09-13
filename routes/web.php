<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\CommentController;

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

//praktikum 1 minggu ke-3 - 1 (halaman home)
Route::get('/', [PageController::class, 'landing_page']);

//praktikum 1 minggu ke-3 - 2 (halaman program studi prefix)
Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika',[ProdiController::class, 'mi_page']);
    Route::get('/teknik-informatika',[ProdiController::class, 'ti_page']);
});

//praktikum 3 - 3 (halaman news param + controller)
Route:: get('news/{id}',[NewsController::class,'halamannews']);

//praktikum 3 - 4 (halaman sarana prefic)
Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran',[SaranaController::class, 'saranakantor']);
    Route::get('/laboratorium',[SaranaController::class, 'saranalab']);
    Route::get('/kelas',[SaranaController::class, 'saranakelas']);
    Route::get('/lainnya',[SaranaController::class, 'saranalainnya']);
});

//praktikum 3 - 5 (about)
Route::get('/about', [PageController::class, 'about_page']);

//praktikum 3 - 6 (halaman comment + controller)
Route:: get('comment/{nama}/{id}',[CommentController::class,'halamancomment']);