<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopAcademicUnitTeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = DB::table('academic_units')
                ->select('name')->get();
       //dd($unidades);
        return view('/teacher/topteacherperacademicunit')->with(compact('unidades'));
        //
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
    public function show(Request $request)
    {
        //
       $unidad = $request->input('unit_name');


        $nota = DB::table('reviews')
        ->select(DB::raw('(AVG(puntuality)+ AVG(knowledge) + AVG(presentation) + AVG(notes)+ AVG(assistance)) as total'),'id_user_evaluated')
        ->whereIn('id_user_evaluated',
        $real_user = DB::table('teachers')
            ->select('id_user')
            ->whereIn('id',
        $id_teachers = DB::table('course_teacher')
            ->select('id_teacher')
            ->whereIn('id_course',
        $id_cursos = DB::table('courses')
            ->select('id')
            ->whereIn('id_academic_unit',
        $id_unidades = DB::table('academic_units')
            ->select('id')
            ->where('name', $unidad))->distinct())))->groupBy('id_user_evaluated')->orderByRaw('total DESC');

         $users = DB::table('users')
            ->joinSub($nota, 'reviewed', function($join){
                $join->on('reviewed.id_user_evaluated','=','users.id');
            })->limit(10)->get();

        //dd($users);
        $users->unidad = $unidad;
            return view('teacher.show_topau')->with(compact('users'));


/*
        $nota = DB::table('reviews')
                ->select(DB::raw('(AVG(puntuality)+ AVG(knowledge) + AVG(presentation) + AVG(notes)+ AVG(assistance)) as total'),'id_user_evaluated')
                ->whereIn('id_user_evaluated',
        $realuser = DB::table('teachers')
                ->select('id_user')
                ->whereIn('id_user',            
        $review = DB::table('reviews')
                ->select('id_user_evaluated')
                ->whereIn('id_course',
        $cursos = DB::table('courses')
                ->select('id')
                ->whereIn('id_school',
        $id_escuelas = DB::table('schools')
                ->select('id')
                ->where('name',$escuela))->distinct())))->groupBy('id_user_evaluated')->orderByRaw('total DESC');

        $users = DB::table('users')
            ->joinSub($nota, 'reviewed', function($join){
                $join->on('reviewed.id_user_evaluated','=','users.id');
            })->limit(10)->get();

        //dd($users);
            $users->escuela = $escuela;
            return view('teacher.show_top')->with(compact('users')); */

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
}
