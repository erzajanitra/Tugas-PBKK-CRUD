<?php

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
use App\Http\Controllers\ArtikelController;

Route::group(['prefix' => 'artikel', 'as' => 'artikel.'], function(){
    Route::get('/', [ArtikelController::class, 'index'])->name('home');
    // Route::get('/', [PengumumanController::class, 'index'])->name('home');
    Route::get('/buat', [ArtikelController::class, 'create'])->name('tambah-data');
    Route::post('/buat-data', [ArtikelController::class, 'store'])->name('buat-data');
    Route::get('/edit/{id}', [ArtikelController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ArtikelController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ArtikelController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [ArtikelController::class, 'show'])->name('show');

});

Route::group(['prefix' => 'penulis', 'as' => 'penulis.'], function(){
    Route::get('/', [ArtikelController::class, 'index'])->name('list');
    // Route::get('/', [PengumumanController::class, 'index'])->name('home');
   

});


