<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/teacher_form','TeacherController@index');

Route::get('/formAux', function () {
    return view('AuxForm');
    });

Route::post('/teacher_form/evaluate','TeacherController@store');

// ruta para perfil del catedratico
Route::get('/perCat', function () {
    return view('catProfile');
});