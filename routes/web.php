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
    return redirect('/sign-in');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/about', function () {
    return view('about');
});