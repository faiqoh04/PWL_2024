<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Jobsheet 2 Praktikum 1

Route::get('/hello', function () {
return 'Hello World';
});

Route::get('/world', function () {
return 'World';
});

Route::get('/Selamat Datang', function () {
return 'Selamat Datang';
});

Route::get('/about', function () {
return '2241760026 / Siti Faiqoh';
});
// view ('about')

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
return 'laman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

// jobsheet 2 praktikum 2
use App\Http\Controllers\WelcomeController; // Jobsheet 2 praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);

use App\Http\Controllers\PageController; // Jobsheet 2 praktikum 2
// Route untuk resource /
Route::get('/', [PageController::class, 'index']);

// Route untuk resource /about
Route::get('/about', [PageController::class, 'about']);

// Route untuk resource /articles/{id}
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController; // Jobsheet 2 praktikum 2
use App\Http\Controllers\AboutController; // Jobsheet 2 praktikum 2
use App\Http\Controllers\ArticleController; // Jobsheet 2 praktikum 2
// single controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

// jobsheet 2 praktikum 3
Route::get('/greeting', function () {
return view('hello', ['name' => 'Andi']);
});

Route::get('/greeting', function () {
return view('blog.hello', ['name' => 'Andi']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);