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

Route::get('/restore-password', function () {
    return view('restore-password');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/events', function () {
    return view('event.events');
});

Route::get('/events/create', function () {
    return view('event.create-event');
});


Route::get('/events/search', function () {
    return view('event.search-event');
});

Route::get('/clients', function () {
    return view('client.clients');
});

Route::get('/clients/create', function () {
    return view('client.create-client');
});

Route::get('/clients/search', function () {
    return view('client.search-client');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/about', function () {
    return view('about');
});
