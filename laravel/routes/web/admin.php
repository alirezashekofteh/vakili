<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategorysahamController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\MenuAdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MetapostController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TermCatController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SlideshowController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ServiceController;
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
Route::get('/', [AdminController::class, 'index'])->name('index');
Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('product', ProductController::class);
Route::resource('Service', ServiceController::class);
Route::resource('category', CategoryController::class);
Route::resource('question', QuestionController::class);
Route::resource('company', CompanyController::class);
Route::resource('menu', MenuController::class);
Route::resource('comments' , CommentController::class)->only(['index' , 'update' , 'destroy']);
Route::resource('role', RoleController::class);
Route::resource('slideshow', SlideshowController::class);
Route::resource('mainpage' , MainPageController::class);

Route::get('changeStatuscomment', [CommentController::class,'changeStatus']);

Route::get('/profile', [UserController::class,'profile'])->name('profile');
Route::get('/change-password', [UserController::class,'changepassword'])->name('changepassword');
Route::get('/two-factor-authentication', [UserController::class,'twofactor'])->name('twofactor');
