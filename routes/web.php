<?php

use App\Http\Controllers\{ArtikelController, ProfileController};
use App\Models\{MainArtikel};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminPanel', function () {
    return view('adminPanel');
})->middleware(['auth', 'verified'])->name('adminPanel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show'); // LIHAT ARTIKEL
Route::get('artikel/create', [ArtikelController::class, 'create'])->name('artikel.create'); // HALAMAN BUAT ARTIKEL
Route::post('artikel', [ArtikelController::class, 'store'])->name('artikel.store'); // SAVE ARTIKEL
Route::get('artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit'); // EDIT ARTIKEL
Route::put('artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update'); // UPDATE ARTIKEL
Route::delete('artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy'); // DELETE ARTIKEL

require __DIR__.'/auth.php';
