<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/',HomeController::class)->name('home');


 Route::prefix('/posts')->group((function(){

     Route::get('/',[PostController::class,'index'])->name('posts.index');
     Route::get('/create',[PostController::class,'create'])->name('posts.create');
     Route::get('/{id}',[PostController::class,'show'])->name('posts.show');
     Route::post('/',[PostController::class,'store'])->name('posts.store');


 }));
