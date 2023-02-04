<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsContoller;
// Route::get('/', function () {
//     return view('welcome');
// });
define('PAGINATION_COUNT', 11);
Route::get('/', [App\Http\Controllers\pagesController::class, 'index']);
Route::resource('/blog', PostsContoller::class);
Route::post('/blog/{post}',[PostsContoller::class, 'store_comment'])->name('blog.add_comment');
// Route::get('/', [IndexController::class, 'index'])->name('frontend.index');


// // Authentication Routes...
// Route::get('/blog', [PostsContoller::class, 'showLoginForm'])->name('frontend.show_login_form');
// Route::post('/blog', [PostsContoller::class, 'login'])->name('frontend.login');
// Route::post('/blog', [PostsContoller::class, 'logout'])->name('frontend.logout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
