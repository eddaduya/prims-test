<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
$url = config('app.url');
URL::forceRootUrl($url);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
