<?php

use App\Http\Controllers\ViewPostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikesController;


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

// admin create new blog form
Route::get('/create', function () {
    return view('admin.create');
})->name('admin.create')->middleware('auth');

// admin insert new blog
Route::resource('insert', 'PostController');

// index admin see all posts
Route::get('/a.posts', [PostController::class, 'index'])
    ->name('a.posts')->middleware('auth');

// admin delete post
Route::get('/a.destroy', [PostController::class, 'destroy'])
    ->name('a.destroy')->middleware('auth');

// admin edit single post form
Route::get('/a.post',  function () {
    return view('admin.edit');
})->name('a.post');
Route::resource('posts', 'PostController');

// index admin view users
Route::get('/users', [UserController::class, 'index'])
    ->name('admin.users')->middleware('auth');
Route::resource('user', 'UserController');

// index user view posts
Route::get('/posts', [ViewPostController::class, 'index'])
    ->name('user.posts');
Route::resource('post', 'ViewPostController');

Route::get('/view-post', function () {
    return view('user.view-post');
})
    ->name('view-post');
Route::resource('view-post', 'LikesController');

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

// dashboard redirects
Route::get('/dashboard', function () {
    return view('greeting');
})->middleware(['auth'])->name('dashboard');

//search function
Route::post('/search', 'ViewPostController@search')
    ->name('search');

require __DIR__.'/auth.php';
