<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Faculty;
use App\AcademicUnit;
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
