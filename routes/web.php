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
    return view('contents.masthead');
    })->name('masthead');
    Route::get('/galeri', function () {
    return view('contents.galeri');
    })->name('galeri');
    Route::get('/contact', function () {
    return view('contents.contact');
    })->name('contact');
    Route::get('/about', function () {
        return view('contents.about');
        })->name('about');
