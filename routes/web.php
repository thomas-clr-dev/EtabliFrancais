<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/artisans', function () {
    return view('artisans');
})->name('artisans');

Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/compte', function () {
    return view('compte');
})->name('compte');

Route::get('/artisans/ebenisterie', function () {
    return view('ebenisterie');
})->name('ebenisterie');

