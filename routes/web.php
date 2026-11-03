<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page-a', function () {
    return view('page-a');
});

Route::get('/page-b', function () {
    return view('page-b');
});

