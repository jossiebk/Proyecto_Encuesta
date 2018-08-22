<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;
use App\TeacherComment;

use App\Review;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $teacher = Teacher::find($id);
        return view('/teacher/form')->with(compact('teacher'));
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
        $r = new Review();

            $r->puntuality = $request->input('P1');
            $r->knowledge = $request->input('P2');
            $r->presentation = $request->input('P3');;
            $r->notes = $request->input('P4');
            $r->assistance = $request->input('P5');
            if(empty($request->input('comment'))){
            $r->comment = 'NO COMENT';
            }else{
            $r->comment = $request->input('comment');                
            }
            $r->id_user_evaluator = 1; //$request->input();
            $r->id_user_evaluated = 1;//$request->input();
            $r->id_course = 1;//$request->input();
            $r->save();
            return redirect('/');
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


    //Metodo para mostrar el perfil
    public function profile($id){
        $teacher = Teacher::find($id);
        return view('catProfile')->with(compact('teacher'));
        }

    //metodo para mostrar el area de reseñas y calificaciones
     public function review($id){
        $teacher = Teacher::find($id);
        return view('catReview')->with(compact('teacher'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //metodo para almacenar las opiniones y calificaciones de los catedraticos
    public function saveReview(Request $request){
        $r = new TeacherComment();
            $r->comment = $request->input('opinion');
             $r->commentN = $request->input('opinionN');
            $r->score = $request->input('score');
            $r->id_teacher = $request->input('id');
            $r->save();
        return back();
    }

}
