<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\Auth\LoginController;

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


// Auth::routes();
// Replace Default Login Route
Route::get('admin/login', [LoginController::class ,'showLoginForm'])->name('login');
Route::get('admin/logout', [LoginController::class ,'logout'])->name('logout');
Route::post('admin/login',  [LoginController::class ,'login'])->name('admin.login');






// ROUTES ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    //Dashboard
    Route::get('/', [DashboardController::class, 'index']);


    //Angkatan


    //Artikel


    //Biro
    Route::get('biro', [BiroController::class, 'index']);


    //Departemen
    Route::get('departemen', [DepartemenController::class, 'index'])->name('list.departemen');
    Route::post('departemen/store', [DepartemenController::class, 'store'])->name('add.departemen');
    Route::post('departemen/update/{id}', [DepartemenController::class, 'update'])->name('update.departemen');
    Route::get('/departemen/delete/{id}', [DepartemenController::class, 'delete'])->name('delete.departemen');

    //Form


    //Jabatan


    //Kategori
    Route::get('kategori', [KategoriController::class, 'index'])->name('list.kategori');
    Route::post('kategori/store', [KategoriController::class, 'store'])->name('add.kategori');
    Route::post('kategori/update/{id}', [KategoriController::class, 'update'])->name('update.kategori');
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('delete.kategori');

    //Komentar


    //KritikSaran


    //Pengurus


    //Prodi

});




//ROUTE USER
Route::get('/', [UserController::class, 'index']);
Route::get('/beranda', [UserController::class, 'index']);
Route::get('blog', [UserController::class, 'blog']);
// Route::view('blog', 'user.pages.blog');
Route::view('profile', 'user.pages.profile');




//404
Route::fallback(function () {
    return view('error-404');
});
