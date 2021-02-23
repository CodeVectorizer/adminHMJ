<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route Admin
Route::view('/admin', 'admin.pages.dashboard');
Route::get('/admin/login', function () {
    return view('auth.login');
});



//Route User 
Route::view('/', 'user.pages.home');
Route::view('beranda', 'user.pages.home');
Route::view('blog', 'user.pages.blog');
Route::view('profile', 'user.pages.profile');




//404
Route::fallback(function () {
    return view('error-404');
});