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

    //Metodo que actualiza la informacion academica del auxiliar
    public function title(Request $request){
        $assistant = Assistant::find($request->input('id'));
        if($assistant == null){
            $alert = 'Alerta! No existe el auxiliar, por favor verifica tu informacion';
            return back()->with(compact('alert'));
        }

        $assistant->academic_experience_1 = !empty($request->input('academic1')) ? $request->input('academic1') : $assistant->academic_experience_1; 
        $assistant->academic_experience_2 = !empty($request->input('academic2')) ? $request->input('academic2') : $assistant->academic_experience_2; 
        $assistant->academic_experience_3 = !empty($request->input('academic3')) ? $request->input('academic3') : $assistant->academic_experience_3;

        $assistant->save();

        $message = 'Informacion actualizada correctamente!';
        return back()->with(compact('message')) ;
        
    }

    //Metodo que actualiza la informacion laboral del auxiliar
    public function work(Request $request){
        $assistant = Assistant::find($request->input('id'));
        if($assistant == null){
            $alert = 'Alerta! No existe el auxiliar, por favor verifica tu informacion';
            return back()->with(compact('alert'));
        }

        $assistant->work_experience_1 = !empty($request->input('work1')) ? $request->input('work1') : $assistant->work_experience_1; 
        $assistant->work_experience_2 = !empty($request->input('work2')) ? $request->input('work2') : $assistant->work_experience_2; 
        $assistant->work_experience_3 = !empty($request->input('work3')) ? $request->input('work3') : $assistant->work_experience_3;

        $assistant->save();

        $message = 'Informacion actualizada correctamente!';
        return back()->with(compact('message')) ;

    }

    //metodo para obtener los cursos de un auxiliar
    public function course_assistant_by_id_assistant(Request $request, $id){

    	$consulta = \DB::table('assistant_course as ac')
    	->join('courses as c', 'ac.id_course', '=', 'c.id')
    	->select('c.id as ID', 'c.name as CURSO')
    	->orderBy('c.id', 'asc')
    	->where('ac.id_assistant','=',$id)
    	->get();

    	return view('/assistants/AssistantCourse', [
    		'consulta' => $consulta
    		]);
    }


    public function saveAssistantToDB(Request $request){
        //dd($request);
            $r = new Assistant();
            $r->birthdate = $request->input('birthdate');
            $r->image = "img.png";//$request->input('image');
            $r->credits = $request->input('credits');;
            $r->personal_description = $request->input('personal_description');
            $r->academic_experience_1 = $request->input('academic_experience_1');
            $r->academic_experience_2 = $request->input('academic_experience_2');
            $r->academic_experience_3 = $request->input('academic_experience_3');
            $r->work_experience_1 = $request->input('work_experience_1');
            $r->work_experience_2 = $request->input('work_experience_2');
            $r->work_experience_3 = $request->input('work_experience_3');
            $r->references = $request->input('references');
            $r->id_user = $request->input('user_id');
           // dd($r);
            $r->save();
            $message = 'Auxiliar cargado exitosamente!';
            return back()->with(compact('message')) ;
    }
}