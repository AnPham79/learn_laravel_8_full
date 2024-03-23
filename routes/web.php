<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'process_login'])->name('process_login');




