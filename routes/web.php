<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/notes', 'NoteController@index');
Route::post('/notes', 'NoteController@store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@logout');
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisteController@store');
