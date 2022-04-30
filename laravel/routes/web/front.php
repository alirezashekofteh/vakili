<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blog', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{post:slug}', [HomeController::class,'blog'])->name('blog');
Route::get('/category/{category:slug}', [HomeController::class, 'catblog'])->name('catblog');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/project/{product:slug}', [HomeController::class, 'product'])->name('product');
Route::get('/blog/cat/{category}', [HomeController::class, 'catblog'])->name('catblog');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service/{service:slug}', [HomeController::class, 'service'])->name('service');
Route::Post('comment',[HomeController::class,'comment'])->name('send.comment')->middleware('auth');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::Post('/contact',[ContactController::class,'store'])->name('contact');

