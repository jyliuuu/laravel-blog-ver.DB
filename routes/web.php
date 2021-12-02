<?php

use App\Http\Controllers\ViewPostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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
//Route::get('/index', function() {
//    return view('user.index');
//})->name('posts');

// new default home screen
Route::get('/home', function () {
    return view('home');
})->name('home');

// index admin edit post
Route::get('/index', [PostController::class, 'index'])
    ->name('admin.index')->middleware('auth');
Route::resource('post', 'PostController');

// index user view posts
Route::get('/posts', [ViewPostController::class, 'index'])
    ->name('user.blogs');
Route::resource('post', 'ViewPostController');

// index admin edit users
Route::get('/users', [UserController::class, 'index'])
    ->name('admin.users')->middleware('auth');
Route::resource('user', 'UserController');

// laravel splash screen
Route::get('/', function () {
    return view('welcome');
});

// settings for users
Route::get('/settings', function () {
    return view('user.settings');
})->name('settings');

// admin create new blog
Route::get('/create', function () {
    return view('admin.create');
})->name('admin.create')->middleware('auth');

// dashboard redirects
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
