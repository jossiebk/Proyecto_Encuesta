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
    public function index()
    {
    return view('/teacher/form');
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
        //var_dump($request->input('R5'));
        //dd($request);
        $r = new Review();

            $r->puntuality = $request->input('R1');
            $r->knowledge = $request->input('R2');
            $r->presentation = $request->input('R3');;
            $r->notes = $request->input('R4');
            $r->assistance = $request->input('R5');
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
            $r->score = $request->input('score');
            $r->id_teacher = $request->input('id');
            $r->save();
        return back();
    }

}
