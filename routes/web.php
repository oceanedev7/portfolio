<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/monparcours', function () {
    return view('career');
})->name('parcours');

Route::get('/mesprojets', function () {
    return view('projects');
})->name('projets');

Route::get('/reseauxsociaux', function () {
    return view('socialmedias');
})->name('socialmedias');

Route::get('/developpementweb', function () {
    return view('webdevelopment');
})->name('webdevelopment');

Route::post('/contactrequest', [ContactController::class, 'create'])->name('contact-request');
