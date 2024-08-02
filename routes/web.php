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

Route::get('artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

require __DIR__.'/auth.php';
