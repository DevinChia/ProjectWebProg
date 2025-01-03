<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/calculator', function () {
    return view('calculator');
})->name('calculator');