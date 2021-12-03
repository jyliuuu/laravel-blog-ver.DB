<?php

use App\Http\Controllers\ViewPostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


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
Route::get('/admin.posts', [PostController::class, 'index'])
    ->name('admin.posts')->middleware('auth');

Route::get('/admin.destroy', [PostController::class, 'destroy'])
    ->name('admin.destroy')->middleware('auth');

Route::resource('admin.posts', 'PostController');

// index admin edit users
Route::get('/users', [UserController::class, 'index'])
    ->name('admin.users')->middleware('auth');
Route::resource('user', 'UserController');

// index user view posts
Route::get('/posts', [ViewPostController::class, 'index'])
    ->name('user.posts');
Route::resource('post', 'ViewPostController');



// laravel splash screen
Route::get('/', function () {
    return view('home');
});

// settings for users
Route::get('/settings', function () {
    return view('user.settings');
})->name('settings');

Route::get('/about', function () {
    return view('other.about');
})->name('about');

// admin create new blog
Route::get('/create', function () {
    return view('admin.create');
})->name('admin.create')->middleware('auth');

// dashboard redirects
Route::get('/dashboard', function () {
    return view('greeting');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
