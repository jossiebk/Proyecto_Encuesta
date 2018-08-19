<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course_teacher_by_id_teacher(Request $request, $id){

    	$consulta = \DB::table('course_teacher as ct')
    	->join('courses as c', 'ct.id_course', '=', 'c.id')
    	->select('c.id as ID', 'c.name as CURSO')
    	->orderBy('c.id', 'asc')
    	->where('ct.id_teacher','=',$id)
    	->get();

    	return view('ProfessorCourse', [
    		'consulta' => $consulta
    		]);
    }
}

