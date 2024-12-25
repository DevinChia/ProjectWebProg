<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/programBulk', function () {
    return view('programBulk');
})->name('programBulk');

Route::get('/programCutt', function () {
    return view('programCutt');
})->name('programCutt');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate'])->name('calculate');