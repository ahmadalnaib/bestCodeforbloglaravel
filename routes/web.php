<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserPostController;

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


Route::get('/',HomeController::class)->name('home');

Route::get('/register',[RegisterController::class,'create'])->name('register');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',LogoutController::class)->name('logout');


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

// user post

Route::get('/users/{user:username}/posts',[UserPostController::class,'index'])->name('users.posts');




 Route::prefix('/posts')->group((function(){

     Route::get('/',[PostController::class,'index'])->name('posts.index');
     Route::get('/create',[PostController::class,'create'])->name('posts.create')->middleware('auth');;
     Route::get('/{post}',[PostController::class,'show'])->name('posts.show');
     Route::post('/',[PostController::class,'store'])->name('posts.store');

     Route::delete('/{post}',[PostController::class,'destroy'])->name('posts.delete');


 }));

