<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/home', function () {
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

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate'])->name('calculate');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');

Route::get('/fiberDetails', function () {
    return view('fiberDetails');
})->name('fiberDetails');

Route::get('/antioxidantsDetails', function () {
    return view('antioxidantsDetails');
})->name('antioxidantsDetails');

Route::get('/fatsDetails', function () {
    return view('fatsDetails');
})->name('fatsDetails');

Route::get('/boostsDetails', function () {
    return view('boostsDetails');
})->name('boostsDetails');

Route::get('/balancesDetails', function () {
    return view('balancesDetails');
})->name('balancesDetails');

Route::get('/workoutsDetails', function () {
    return view('workoutsDetails');
})->name('workoutsDetails');

Route::get('/news', function () {
    return view('news');
})->name('news');