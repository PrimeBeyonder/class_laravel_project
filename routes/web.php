<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/articles/detail/{content}" , function(){
    echo "Article Detaile";
});
Route::get("/articles" , function(){
    echo "Article ";
});
