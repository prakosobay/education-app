<?php

use App\Http\Controllers\{ArticleController, ArtikelController, CommentController, ProfileController};
use App\Models\{MainArtikel};
use Illuminate\Support\Facades\Route;

Route::get('/',[ArticleController::class, 'indexForGuest']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [ArticleController::class, 'index'])->middleware(['auth', 'verified'])->name('users');

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

Route::get('article/new',
    [ArticleController::class, 'newArticle'])
        ->middleware(['auth', 'verified'])
        ->name('article.new');
Route::get('article/{id}',
    [ArticleController::class, 'findArticleById'])->name('article.id');
Route::post('/articles/{id}/comments',
    [CommentController::class, 'store'])->name('comments.store');

Route::fallback(fn() => view('fallback.404'));

/* TEST PURPOSE */
Route::post('test/name', [ArtikelController::class, 'test']);

require __DIR__.'/auth.php';
