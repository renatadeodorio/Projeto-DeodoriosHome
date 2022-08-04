<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});
Route::middleware(['auth'])->group(function() {
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('/post', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}', [UserController::class, 'show'])->name('posts.show');

});

Route::middleware(['auth' ,'admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'admin'])->name('admin');
});
