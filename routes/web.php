<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/notes', 'NoteController@index');

Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@storeLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@storeRegister');
