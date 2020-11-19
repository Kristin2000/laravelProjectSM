<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('index', [PostController::class, "index"]);

Route::get('create', [PostController::class, "create"]);

Route::get('edit', [PostController::class, "edit"]);

Route::get('update', [PostController::class, "update"]);


Route::resource('comments', CommentController::class);

Route::get('comment/create', [CommentController::class, "create"]);

Route::get('comment/edit', [CommentController::class, "edit"]);

Route::post('/comments', 'App\Http\Controllers\CommentController@store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
