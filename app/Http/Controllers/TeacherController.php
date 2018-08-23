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
            $r->score = $request->input('score');
            $r->id_teacher = $request->input('id');
            $r->save();
        return back();
    }

    //Metodo que retorna la vista al dashboard del catedratico
    public function dashboard(){
        return view('teacher.dashboard');
    }

    //Metodo que almacena/actualiza la informacion academica del catedratico
    public function titles(Request $request){
        $teacher = Teacher::find($request->input('id'));
        if($teacher == null){
            $alert = 'Alerta! No existe el profesor, por favor verifica tu informacion';
            return back()->with(compact('alert'));
        }

        $teacher->academic_title_1 = !empty($request->input('title1')) ? $request->input('title1') : $teacher->academic_title_1; 
        $teacher->academic_title_2 = !empty($request->input('title2')) ? $request->input('title2') : $teacher->academic_title_2; 
        $teacher->academic_title_3 = !empty($request->input('title3')) ? $request->input('title3') : $teacher->academic_title_3;

        $teacher->save();

        $message = 'Informacion academica ingresada correctamente!';
        return back()->with(compact('message')) ;

    }

    //Metodo que almacena/actualiza la informacion laboral del catedratico
    public function works(Request $request){
        $teacher = Teacher::find($request->input('id'));
        if($teacher == null){
            $alert = 'Alerta! No existe el profesor, por favor verifica tu informacion';
            return back()->with(compact('alert'));
        }

        $teacher->work_experience_1 = !empty($request->input('work1')) ? $request->input('work1') : $teacher->work_experience_1; 
        $teacher->work_experience_2 = !empty($request->input('work2')) ? $request->input('work2') : $teacher->work_experience_2; 
        $teacher->work_experience_3 = !empty($request->input('work3')) ? $request->input('work3') : $teacher->work_experience_3;

        $teacher->save();

        $message = 'Informacion laboral ingresada correctamente!';
        return back()->with(compact('message')) ;

    }

}
