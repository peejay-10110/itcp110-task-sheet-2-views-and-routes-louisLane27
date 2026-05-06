<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/islands', function () {
    return view('islands');
})->name('islands');

Route::get('/culture', function () {
    return view('culture');
})->name('culture');

Route::get('/cuisine', function () {
    return view('cuisine');
})->name('cuisine');

Route::get('/festivals', function () {
    return view('festivals');
})->name('festivals');

Route::get('/nature', function () {
    return view('nature');
})->name('nature');

Route::get('/cities', function () {
    return view('cities');
})->name('cities');

Route::get('/people', function () {
    return view('people');
})->name('people');

Route::get('/travel', function () {
    return view('travel');
})->name('travel');