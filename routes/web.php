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


Route::get('/search', 'SearchController@show'); //Ruta para buscar a un catedratico recibe como parametro el nombre a buscar




Route::get('/formAux', 'AssistantController@evaluation');

Route::post('/formAux', 'AssistantController@saveEvaluation');



Route::post('/teacher_form/evaluate','TeacherController@store');

// ruta para perfil del catedratico
Route::get('/perCat/{id}', 'TeacherController@profile');

// ruta para perfil obtener cursos del catedratico
Route::get('/ProfileCourse/{id}', 'CourseController@course_teacher_by_id_teacher');

//ruta para obtener el area para calificar catedraticos
Route::get('/teacherReview/{id}', 'TeacherController@review');

Route::post('/teacherReview/{id}', 'TeacherController@saveReview');

Route::get('/AuxReview/{id}', 'AssistantController@reviewAux');

Route::post('/AuxReview/{id}', 'AssistantController@saveReview');