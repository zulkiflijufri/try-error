<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index');
Route::get('/create-task', 'TaskController@create');
Route::post('/create-task', 'TaskController@store');
