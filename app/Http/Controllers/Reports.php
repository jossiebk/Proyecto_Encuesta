<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reports extends Controller
{
    public function Top10General(){
    		$consulta = \DB::table('reviews as r')
		    	->join('teachers as t', 'r.id', '=', 't.id')
		    	->join('users u', 'u.id', '=', 't.id_user')
		    	->select('u.name as NAME,', 'r.notes as NOTE')
		    	->orderBy('r.notes desc')
		    	->limit('10')
		    	->get();

		    return view('/Reports/Top10General', [
    		'consulta' => $consulta
    		]);
    	
    }
}
