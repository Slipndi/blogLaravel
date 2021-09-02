<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

Route::get('/', [PostController::class,'index'] )->name('home');
Route::get('posts/{post:slug}', [PostController::class,'showPost'])->name('posts');

Route::get('inscription', [RegisterController::class, 'create'])->middleware('guest')->name('CreateUser');
Route::post('inscription', [RegisterController::class, 'store'])->middleware('guest');

Route::get('connexion',[SessionController::class,'create'])->middleware('guest');
Route::post('session',[SessionController::class,'store']);
Route::post('logout',[SessionController::class, 'destroy'])->middleware('auth');


