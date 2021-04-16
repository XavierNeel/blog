<?php

use Illuminate\Support\Facades\Route;


Route::name('app_home')->get('/', function() {
    return view('pages/home');

});

Route::name('app_about')->get('/about', function() {
    return view('pages/About');

});

