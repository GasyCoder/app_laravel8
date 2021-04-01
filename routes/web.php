<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/pages/about-us', function () {
    return view('pages.about');
})->name('about');

/*Route::get('price', function () {
	return view('pages.price');
})->name('price');*/

Route::get('contact', function () {
	return view('pages.contact');
})->name('contact');