<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::get('/login',    [LoginController::class, 'index'])->name('login.index');
Route::resource('blog', PostController::class);
