<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function () {
    return 'Hola lucy';
});

Route::get('/bienvenidos', function () {
    return view(view:'bienvenidos');
});