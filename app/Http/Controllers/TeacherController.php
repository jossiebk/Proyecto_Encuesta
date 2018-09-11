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
        if(!$teacher){
            abort(404);
        }
        return view('catProfile')->with(compact('teacher'));
        }

    //metodo para mostrar el area de reseñas y calificaciones
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            $r->score = $request->input('estrellas');
            $r->id_teacher = $request->input('id');
            $r->updated_at="2018-08-15 23:35:55";
            $r->created_at="2018-08-15 23:35:55";
            $r->save();
        return back();
    }

    //Metodo que retorna la vista al dashboard del catedratico
    public function dashboard(){
        //Inyecto las reviews de un catedratico por defecto ya que aun no tenemos login
        $rating = $this->getAverageOfAllReviews();
        return view('teacher.dashboard')->with(compact('rating'));
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

    //Metodo que almacena/actualiza la informacion laboral del catedratico
    public function reference(Request $request){
        $teacher = Teacher::find($request->input('id'));
        if($teacher == null){
            $alert = 'Alerta! No existe el profesor, por favor verifica tu informacion';
            return back()->with(compact('alert'));
        }

        $teacher->references = !empty($request->input('reference1')) ? $request->input('reference1') : $teacher->references; 

        $teacher->save();

        $message = 'Referencia personal ingresada correctamente!';
        return back()->with(compact('message')) ;

    }

    //Metoto para obtener las evaluaciones de un catedratico
    public function getTeacherReviews($id_teacher)
    {
        $teacher = Teacher::find($id_teacher);

        $reviews = Review::where('id_user_evaluated', $teacher->user->id)->get();
        return $reviews;

    }

    //Metodo para obtener el promedio de todas las evaluaciones de un catedratico
    public function getAverageOfAllReviews()
    {
        $reviews = $this->getTeacherReviews(1);
        $puntuality = 0;
        $knowledge = 0;
        $presentation = 0;
        $notes = 0;
        $assistance = 0;
        foreach($reviews as $review)
        {
            $puntuality = $puntuality + $review->puntuality;
            $knowledge = $knowledge + $review->knowledge;
            $presentation = $presentation + $review->presentation;
            $notes = $notes + $review->presentation;
            $assistance = $assistance + $review->assistance;
        }

        $totalReviews = $reviews->count();

        $rating = [
            "puntuality" => Round($puntuality/$totalReviews, 2),
            "knowledge" => Round($knowledge/$totalReviews, 2),
            "presentation" => Round($presentation/$totalReviews, 2),
            "notes" => Round($notes/$totalReviews, 2),
            "assistance" => Round($assistance/$totalReviews, 2),
            "reviewsCount" => $reviews->count(),
        ];

        return $rating;
    }


    //metodo para obtener los resultados del profesor
    public function indexProfessorResult(Request $request){

        $consulta = \DB::select(' SELECT cu.name as CURSO, (sum(r.puntuality)+sum(r.knowledge)+sum(r.presentation)+sum(r.notes)+sum(r.assistance))/5 as NOTA 
                                    FROM reviews as r
                                    inner join courses as cu
                                        on r.id_course=cu.id
                                    WHERE id_user_evaluated=15
                                    group by r.id_user_evaluated, r.id_course;');

        return view('/perCat', [
            'consulta' => $consulta
            ]);
    }

}
