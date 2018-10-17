<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Faculty;
use App\AcademicUnit;
use App\User;
use App\Teacher;

use App\Course;

class AdministrativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        $faculties = Faculty::all();
        $academicUnits = AcademicUnit::all();
        return view('AdministrativeDashboard')->with(compact('schools', 'faculties', 'academicUnits'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function TeacherStore(Request $request){
        $r=new User();
        
        //datos que van a user
        $r->name=$request->input('name');
        $r->email=$request->input('email');
        $r->password=$request->input('pass');
        $r->save();
        $user1=$r::where('email',$request->input('email'))->first();
        //Datos que van a teacher
        $q=new Teacher();
        $q->birthdate=$request->input('birthday');
        $q->personal_description=$request->input('des');
        $q->academic_title_1=$request->input('tittle1');
        $q->academic_title_2=$request->input('tittle2');
        $q->academic_title_3=$request->input('tittle3');
        $q->work_experience_1=$request->input('ex1');
        $q->work_experience_1=$request->input('ex2');
        $q->work_experience_1=$request->input('ex3');
        $q->references=$request->input('ref');
        $q->id_user=$user1->id;
        $q->image="https://lorempixel.com/640/480";
        $q->save();
        return redirect('/AdministrativeDashboard');


    public function courses(Request $request)
    {
        $course = new Course();
        $course->name = $request->input('name');
        $course->code = $request->input('code');
        $course->description = $request->input('des');
        $course->id_faculty = $request->input('faculties_id');
        $course->id_school = $request->input('school_id');
        $course->id_academic_unit = $request->input('academicUnits_ids');
        $course->save();
        $message = "Curso registrado correctamente";
        return back()->with(compact('message'));

    }
}

