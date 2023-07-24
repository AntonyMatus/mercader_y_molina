<?php

use App\Http\Controllers\admin\AuthorController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::post('/send_email_contact', [PublicController::class, 'sendContactMail']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resources([
//     'categories' => CategoryController::class,
//     'Blogs' => BlogController::class,
//     'Authors' => AuthorController::class,
//     'Users' => AdminUserController::class
// ]);
