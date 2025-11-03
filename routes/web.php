<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('lintasarta_login');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/candidate', function () {
    return view('candidate');
});

Route::get('/job-role', function () {
    return view('job-role');
});

// Generative Chat page
Route::get('/generative-chat', function () {
    return view('generative-chat');
});
