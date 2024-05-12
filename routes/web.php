<?php

use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ArticleController::class , 'index']);
Route::get("/articles/detail/{id}" , [ArticleController::class , "detail"]
);
Route::get("/articles" , [ArticleController::class , "index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
