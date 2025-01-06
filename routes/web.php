<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');