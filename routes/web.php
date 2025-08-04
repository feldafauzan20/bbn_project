<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContentController;
use App\Models\LandingPage;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::prefix('api/content')->group(function () {
    Route::get('landing-page', [ContentController::class, 'getLandingPage']);
    Route::get('about-us', [ContentController::class, 'getAboutUs']);
    Route::get('why-choose-us', [ContentController::class, 'getWhyChooseUs']);
    Route::get('how-we-work', [ContentController::class, 'getHowWeWork']);
    Route::get('services', [ContentController::class, 'getServices']);
    Route::get('projects', [ContentController::class, 'getProjects']);
    Route::get('projects/{id}', [ContentController::class, 'getProjectDetail']);
    Route::get('featured-projects', [ContentController::class, 'getFeaturedProjects']);
    Route::get('projects-gallery', [ContentController::class, 'getProjectGallery']);
});

Route::get('/', function () {
    $landingPage = LandingPage::first();
    return view('welcome', compact('landingPage'));
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
    return view('services');
});

Route::get('/contact-form
', function () {
    return view('contact-form');
});



