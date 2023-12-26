<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalangDanaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/GalangDana', [GalangDanaController::class, 'view'])->name('galangdana.page');
    Route::get('/GalangDana/tahap1', [GalangDanaController::class, 'tahap1'])->name('galangdana.tahap1');
    Route::post('/GalangDana/tahap1', [GalangDanaController::class, 'storeTahap1'])->name('galangdana.storeTahap1');
    Route::get('/GalangDana/tahap2', [GalangDanaController::class, 'tahap2'])->name('galangdana.tahap2');
    Route::post('/GalangDana/tahap2', [GalangDanaController::class, 'storetahap2'])->name('galangdana.storetahap2');
    Route::get('/GalangDana/tahap3', [GalangDanaController::class, 'tahap3'])->name('galangdana.tahap3');
    Route::post('/GalangDana/tahap3', [GalangDanaController::class, 'storeTahap3'])->name('galangdana.storeTahap3');
    Route::get('/dashboard', [GalangDanaController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
