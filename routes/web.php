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



Route::get('/','Controller@homePage');

Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/teacher_form/{id}','TeacherController@index');


Route::get('/search', 'SearchController@show'); //Ruta para buscar a un catedratico recibe como parametro el nombre a buscar




Route::get('/formAux/{id}', 'AssistantController@evaluation');

Route::post('/formAux/', 'AssistantController@saveEvaluation');



Route::post('/teacher_form/evaluate','TeacherController@store');

// ruta para perfil del catedratico
Route::get('/perCat/{id}', 'TeacherController@profile');

// ruta para notas obendias  del catedratico
Route::get('/teacher/ProfessorResult/{id}', 'ProfessorResult@indexProfessorResult');


// ruta para obtener cursos del catedratico
Route::get('/ProfileCourse/{id}', 'CourseController@course_teacher_by_id_teacher');

//ruta para obtener el area para calificar catedraticos
Route::get('/teacherReview/{id}', 'TeacherController@review');

Route::post('/teacherReview', 'TeacherController@saveReview');

//ruta para obtener top 10 de catedraticos en general
Route::get('/Reports/Top10General','Reports@Top10General');

//Ruta para el dashboard del catedratico
Route::get('/teacher/dashboard', 'TeacherController@dashboard');
//Ruta para almacenar/actualizar informacion academica
Route::post('/teacher/dashboard/titles', 'TeacherController@titles');
//Ruta para almacenar/actualizar informacion laboral
Route::post('/teacher/dashboard/works', 'TeacherController@works');
//Ruta para almacenar/actualizar referencia personal
Route::post('/teacher/dashboard/reference', 'TeacherController@reference');

// ruta para perfil del auxiliar
Route::get('/assistantProfile/{id}', 'AssistantController@profile');

Route::get('/AuxReview/{id}', 'AssistantController@reviewAux');

Route::post('/AuxReview/{id}', 'AssistantController@saveReview');



//ruta para obtener top 10 de auxiliares en general
Route::get('/Reports/Top10AuxGeneral','Reports@Top10AuxGeneral');

//routes for top teacher per school 
Route::get('/TopTeacherPerSchool','TopSchoolTeachersController@index');

Route::get('/Generate_Top', 'TopSchoolTeachersController@show');
//ruta para Top10 de Auxiliares por Curso
Route::get('/Top10AssistantPerSchool', 'Reports@School');
//ruta para top generado
Route::get('/Top10AssistantPerSchool/Top_Generado', 'Reports@Top10AssisPerSchool');

//routes for top teacher per school 
Route::get('/TopTeacherPerAcademicUnit','TopAcademicUnitTeachersController@index');

Route::get('/GenerateTopAU', 'TopAcademicUnitTeachersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//ruta para Top10 de Auxiliares por Curso
Route::get('/Top10AssistantPerAcademicUnit', 'Reports@AcademicUnit');
//ruta para top generado
Route::get('/Top10AssistantPerAcademicUnit/Top_Generado', 'Reports@Top10AssisPerAcademicUnit');
//ruta para 
Route::get('/LoadAssistant/{id}', 'LoadAssistantController@index');