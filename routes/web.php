<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;
use App\Models\Estudiante;


Route::get('/', function () {

    $estudiante = new Estudiante();
    $estudiante->nombres = 'lucy';
    $estudiante->pri_ape = 'reyes';
    $estudiante->seg_ape = 'ruiz';
    $estudiante->save();

    return $estudiante;
    //return 'Aqui trabajare con la tabla estudiantes';
    //return view('welcome');
});


Route::get('/greeting', function () {
    return 'Hola lucy';
})->name ( "saluditos");

Route::get('/bienvenidos', function () {
    return view('bienvenidos');
})->name( 'bienvenidos');

Route::get('/hola reyes', function () {
    return ('hola reyes');
})->name( 'hola reyes');