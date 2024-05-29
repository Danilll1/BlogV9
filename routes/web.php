<?php

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostsController;

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
});

Route::get('home', [PostsController::class, 'index'])->name('home');

Route::get('/article/{slug}', [PostsController::class, 'index'])->name('posts.single');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.single');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [MainController::class, 'index']) ->name('admin.index');

// Route::get('/', function(){
//     return view('home.home');
// })->name('home');


