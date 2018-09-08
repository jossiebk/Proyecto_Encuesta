<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reports extends Controller
{
    public function Top10General(Request $request){
		$consulta = \DB::table('reviews as r')
    	->join('teachers as t', 'r.id', '=', 't.id')
    	->join('users as u','u.id','=','t.id_user')
    	->select('u.name as NAME', 'r.notes as NOTE')
    	->orderBy('r.notes', 'desc')
		->take('10')
    	->get();

		    return view('/Reports/Top10General', [
    		'consulta' => $consulta
    		]);
    	
    }

    public function Top10AuxGeneral(Request $request){
        $consulta = \DB::table('reviews as r')
        ->join('assistants as a', 'r.id', '=', 'a.id')
        ->join('users as u','u.id','=','a.id_user')
        ->select('u.name as NAME', 'r.notes as NOTE')
        ->orderBy('r.notes', 'desc')
        ->take('10')
        ->get();

            return view('/Reports/Top10AuxGeneral', [
            'consulta' => $consulta
            ]);
        
    }
}
