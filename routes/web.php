<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [ProductController::class, 'index' ])->name('index');

Route::get('/user', [UserController::class, 'index' ])->name('index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyId');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');

Route::get('/update-post/{id}', [ClientController::class, 'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

Route::get('/Fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('checkLogin');

Route::post('/login', [LoginController::class, 'process_login'])->name('process_login');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('getSessionData');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('storeSessionData');
Route::get('/session/destroy', [SessionController::class, 'deleteSessionData'])->name('deleteSessionData');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('getAllPost');
Route::get('/form-insert', [PostController::class, 'createPost'])->name('form-insert');
Route::post('/process-insert', [PostController::class, 'storePost'])->name('process-insert');
Route::get('/view-post/{id}', [PostController::class, 'showPost'])->name('view-post');
Route::get('/form-edit/{id}', [PostController::class, 'editPost'])->name('form-edit');
Route::put('/process-update/{id}', [PostController::class, 'updatePost'])->name('process-update');
Route::delete('/delete-post/{id}', [PostController::class, 'deletePost'])->name('delete-post');