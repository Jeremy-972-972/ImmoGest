<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoController;
use App\Http\Controllers\ProfileController;

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
});
Route::get('/tuto', [TutoController::class, 'index']);

Route::post('posts/{post}/comments', [CommentController::class,'store'])->middleware('auth')->name('comments.store');
    Route::get('/index', [PostController::class, 'index'])->name('index');
    Route::get('/show', [PostController::class, 'show'])->name('show');


require __DIR__.'/auth.php';
