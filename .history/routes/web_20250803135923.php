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

Route::get('/services
', function () {
    return view('services
    ');
});

Route::get('/contact-form
', function () {
    return view('contact-form
    ');
});

Route::get('/single-product
', function () {
    return view('single-product
    ');
});
