<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', [PostController::class, 'index'])
    ->name('admin.index')->middleware('auth');

//Route::get('/index', function() {
//    return view('user.index');
//})->name('posts');

Route::resource('post', 'PostController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/settings', function () {
    return view('user.settings');
})->name('settings');

Route::get('/create', function () {
    return view('admin.create');
})->name('admin.create')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
