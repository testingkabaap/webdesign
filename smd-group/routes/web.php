<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
    return "optimized";
});

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});