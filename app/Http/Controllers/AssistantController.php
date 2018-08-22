<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Assistant;

class AssistantController extends Controller
{
    public function evaluation(){
    	return view('AuxForm');
    }

    public function saveEvaluation(Request $request){
    	$r = new Review();
    	$r->puntuality = $request->input('p1');
    	$r->knowledge = $request->input('p2');
    	$r->presentation = $request->input('p3');
    	$r->notes = $request->input('p4');
    	$r->assistance = $request->input('p5');
    	$r->comment = $request->input('comment');
    	$r->id_user_evaluator = $request->input('id_user_evaluator');
    	$r->id_user_evaluated = $request->input('id_user_evaluated');
    	$r->id_course = $request->input('id_course');
    	$r->save();
    	return back();

    }

    //Metodo para mostrar el perfil
    public function profile($id){
        $assistant = Assistant::find($id);
        return view('AssistantProfile')->with(compact('assistant'));
    }
}
