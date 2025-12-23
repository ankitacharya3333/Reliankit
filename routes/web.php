<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/investor-relations', function () {
    return view('investor-relations');
})->name('investor-relations');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/notice', function () {
    return view('notice');
})->name('notice');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/Overview', function () {
    return view('Overview');
})->name('Overview');

Route::get('/Ourhistory', function () {
    return view('Ourhistory');
})->name('Ourhistory');
