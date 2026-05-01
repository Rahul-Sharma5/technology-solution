<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom-software-development', function () {
    return view('services/custom-software-development');
});

Route::get('/cloud-solutions', function () {
    return view('services/cloud-solutions');
});

Route::get('/cybersecurity', function () {
    return view('services/cybersecurity');
});

Route::get('/data-analytics-ai', function () {
    return view('services/data-analytics-ai');
});

Route::get('/digital-transformation', function () {
    return view('services/digital-transformation');
});

Route::get('/web-development', function () {
    return view('services/web-development');
});

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
