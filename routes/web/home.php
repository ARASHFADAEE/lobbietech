<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('index');
});


Route::get('/blog', function () {
    return view('blog1');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/single', function () {
    return view('blog-details');
});



Route::prefix('admin')->group(function(){
    Route::get('/articles', function () {
        return "admin welcome to articles ";
    });
    Route::get('/users', function () {
        return "admin welcome to users ";
    });
    Route::get('/new-article', function () {
        return "admin welcome to  add new article ";
    });

});
