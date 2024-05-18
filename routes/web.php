<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ArticleController::class , 'index']);


Route::get("/articles/detail/{id}" , [ArticleController::class , "detail"]);
Route::get("/articles/delete/{id}" , [ArticleController::class , "delete"]);

Route::get("/articles" , [ArticleController::class , "index"]);
Route::get("/articles/add" , [ArticleController::class , "add"]);
Route::post("/articles/add" , [ArticleController::class , "create"]);


Route::post("/comment/add" , [CommentController::class , "create"]);
Route::get("/comments/delete/{id}" , [CommentController::class , "delete"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
