<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assistant;
use App\Review;

class LoadAssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Assistant = Assistant::find($id);
        return view('/assistants/LoadAssistant')->with(compact('Assistant'));
          
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
    public function update(Request $request)
    {
        //
           // dd($request);
            $r = new Assistant();
            $r->birthdate = $request->input('birthdate');
            $r->image = $request->input('image');
            $r->credits = $request->input('credits');;
            $r->personal_description = $request->input('personal_description');
            $r->academic_experience_1 = $request->input('academic_experience_1');
            $r->academic_experience_2 = $request->input('academic_experience_2');
            $r->academic_experience_3 = $request->input('academic_experience_3');
            $r->work_experience_1 = $request->input('work_experience_1');
            $r->work_experience_2 = $request->input('work_experience_2');
            $r->work_experience_3 = $request->input('work_experience_3');
            $r->references = $request->input('references');
            $r->id_user = 10;
            $r->save();
            return redirect('/');

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAssistantDashboard()
    {
         $rating = $this->getAverageOfAllReviewsAssistant();
        return view('/AssistantDashboard')->with(compact('rating'));
          
    }

//Metoto para obtener las evaluaciones de un auxiliar
    public function getAssistantReviews($id_assistant)
    {
        $assistant = Assistant::find($id_assistant);
        $reviews = Review::where('id_user_evaluated', $assistant->user->id)->get();
        return $reviews;
    }


//Metodo para obtener el promedio de todas las evaluaciones de un catedratico
    public function getAverageOfAllReviewsAssistant()
    {
        $reviews = $this->getAssistantReviews(2);
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

}
