<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home/about', [HomeController::class, 'about']);
Route::get('/home/blog', [HomeController::class, 'blog']);
Route::get('/home/blog/{id}', [HomeController::class, 'single_blog']);
Route::get('/home/produk', [HomeController::class, 'produk']);
Route::get('/home/produk/{id}', [HomeController::class, 'single_produk']);
Route::get('/home/kategori/{id}', [HomeController::class, 'kategori']);
Route::get('/home/kontak', [HomeController::class, 'kontak']);
Route::get('/not-found', [HomeController::class, 'notFound'])->name('custom.404');

Route::middleware(['guest'])->group(function(){
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'login_action']);
    Route::get('register', [LoginController::class, 'register']);
    Route::post('register', [LoginController::class, 'register_action']);
});

Route::get('logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function(){
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    // slider
    Route::resource('slider', SliderController::class);
    // management
    Route::resource('management', ManagementController::class);
    // category
    Route::resource('category', CategoryController::class);
    // subcategory
    Route::resource('product', ProductController::class);
    // bestoffer
    Route::resource('blog', BlogController::class);
    //produk
    Route::resource('about', ContactController::class);
    // Logo
    Route::resource('logo', LogoController::class);

});
