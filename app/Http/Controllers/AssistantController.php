<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use App\Assistant;
use App\AssistantComment;
class AssistantController extends Controller
{
    public function evaluation($id){
        $assistant = Assistant::find($id);
        return view('AuxForm')->with(compact("assistant"));
    }
    
    public function ReviewAux($id){
        $assistant = Assistant::find($id);
        return view('AuxReview')->with(compact("assistant"));
    }
    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function savereview(Request $request){
        $r = new AssistantComment();
        $r->comment = $request->input('opinion');
        $r->commentN = $request->input('opinion2');
        $r->score= $request->input('estrellas');
        $r->id_assistant= $request->input('id');
        $r->save();
        return back();
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