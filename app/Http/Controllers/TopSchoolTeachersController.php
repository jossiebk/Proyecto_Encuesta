<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopSchoolTeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/teacher/topteacherperschool');
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
/*
        $cursos = DB::table('courses')
                ->whereIn('id_school',*/
        $escuela = $request->input('school_name');

        $nota = DB::table('reviews')
                ->select(DB::raw('(SUM(puntuality)+ SUM(knowledge) + SUM(presentation) + SUM(notes)+ SUM(assistance)) as total'),'id_user_evaluated')
                ->whereIn('id',
        $review = DB::table('reviews')
                ->select('id')
                ->whereIn('id_course',
        $cursos = DB::table('courses')
                ->select('id')
                ->whereIn('id_school',
        $id_escuelas = DB::table('schools')
                ->select('id')
                ->where('name',$escuela))->distinct()))->groupBy('id_user_evaluated')->orderByRaw('total DESC')/*->get()*/;

        $users = DB::table('users')
            ->joinSub($nota, 'reviewed', function($join){
                $join->on('reviewed.id_user_evaluated','=','users.id');
            })->limit(10)->get();

        //dd($users);
            $users->escuela = $escuela;
            return view('teacher.show_top')->with(compact('users'));
/*
        $profesores = DB::table('course_teacher')
                ->select('id_teacher')
                ->whereIn('id_course',
        $cursos = DB::table('courses')
                ->select('id')
                ->whereIn('id_school',
        $id_escuelas = DB::table('schools')
                ->select('id')
                ->where('name',$escuela)))->distinct()->get();*/
                
          // dd($teachers);     
//       dd($review);
/*  
        

       $results = DB::select('select id_user_evaluated, (puntuality + knowledge+ presentation + notes + assistance) as total from reviews 
           where id_user_evaluated in(
           select name from users where id in(
           select id_teacher from course_teacher where id_course in (
           select id from courses where id_school in(
           select id from schools where name = '.$request->input('school_name').'))));');

        dd($results);
        //
       /* $name = $request->input('shool_name');
        $users = Schools::where('name', 'like',$name)->get();
        return view ('/teacher/show_top')->with(compact('users'));*/
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
