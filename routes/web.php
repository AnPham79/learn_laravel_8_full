<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginateController;
use App\Http\Controllers\UploadControler;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ConcatdumeController;
use Illuminate\Support\Facades\App;
use App\paymentGateway\Payment;



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

// Route::get('/{locale}', function($locale) {
//     App::setlocale($locale);
//     return view('welcome');
// });
Route::get('/', function() {
    return view('welcome');
});

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

// join

Route::get('/inner-join', [PostController::class, 'innerJoinCaluse'])->name('post.inner-join');
Route::get('/left-join', [PostController::class, 'innerJoinCaluse'])->name('post.left-join');
Route::get('/right-join', [PostController::class, 'innerJoinCaluse'])->name('post.right-join');

// models
Route::get('/get-prd-by-model', [PostController::class, 'getAllProductByModel'])->name('post.get-prd-by-model');

// blade
Route::get('/test', function() {
    return view('test');
});

Route::get('/home', function() {
    return view('index');
});

Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});

// paginators

Route::get('/paginators', [PaginateController::class, 'getAllUser'])->name('paginators');

// upload file
Route::get('/uploads-file', [UploadControler::class, 'UploadForm'])->name('upload.UploadForm');
Route::post('/uploads-file', [UploadControler::class, 'UploadFile'])->name('upload.UploadFile');

// facede and provider
Route::get('/payment', function() {
    return Payment::process();
});

// gửi mail
Route::get('/send-mail', [MailController::class, 'sendMail']);

// eloquent

Route::group(['prefix' => 'student', 'as' => 'student.'], function() {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/create', [StudentController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [StudentController::class, 'update'])->name('update');
    Route::get('/destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

Route::get('/add-role', [RoleController::class, 'addRole'])->name('addRole');
Route::get('/add-student', [RoleController::class, 'addStudent'])->name('addStudent');

// Export Data in Excel and CSV
Route::get('/add-employee', [EmployeeController::class, 'addEmployee'])->name('addEmployee');

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel'])->name('exportIntoExcel');

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV'])->name('exportIntoCSV');

// form import
Route::get('/import-form', [EmployeeController::class, 'importForm'])->name('importForm');

Route::post('/import', [EmployeeController::class, 'import'])->name('import');

// dropzone
Route::get('/dropzone', [DropzoneController::class, 'dropzone'])->name('dropzone');
Route::post('/dropzone-store', [DropzoneController::class, 'dropzoneStore'])->name('dropzoneStore');

// lazy image
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

// editor
Route::get('/editor', [EditorController::class, 'editor'])->name('editor');

// CRUD image with person
Route::get('/add-person', [ConcatdumeController::class, 'addPerson'])->name('add-person');
Route::post('/add-person', [ConcatdumeController::class, 'storePerson'])->name('storePerson');



