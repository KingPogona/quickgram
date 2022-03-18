<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Mail\NewUserWelcomMail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/email', function () {
//     return new NewUserWelcomMail();
// });


// Route::post('follow/{user}', 'FollowsController@store');
Route::post('follow/{user}', [Controllers\FollowsController::class, 'store']);


// profile routes
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{user}', [Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [Controllers\ProfilesController::class, 'update'])->name('profile.update');

// posts routes
Route::get('/', [Controllers\PostsController::class, 'index']);
Route::get('/p/create', [Controllers\PostsController::class, 'create']);
Route::post('/p', [Controllers\PostsController::class, 'store']);
Route::get('/p/{post}', [Controllers\PostsController::class, 'show']);

// search routes
Route::get('/search/{searchTerm}', [Controllers\SearchController::class, 'show']);

// file upload routes
Route::post('/upload', 'FileUploadController@storeUploads');
