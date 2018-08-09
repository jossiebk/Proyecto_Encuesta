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

<<<<<<< HEAD
Route::get('/dash', function () {
    return view('dashboard');
});
=======

Route::get('/teacher_form','TeacherController@index');
>>>>>>> aa69fbf89fe845bd2ae3a9ef05165b477e8aa756
