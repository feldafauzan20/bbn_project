<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/why-choose-us', function () {
    return view('why-choose-us');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/works', function () {
    return view('works');
});

Route::get('/projects', function () {
    return view('projects');
});
