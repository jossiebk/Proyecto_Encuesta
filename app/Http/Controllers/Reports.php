<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reports extends Controller
{
    public function Top10General(Request $request){
		/*$consulta = \DB::table('reviews r')
    	->join('teachers t', 'r.id', '=', 't.id')
    	->join('users u','u.id','=','t.id_user')
    	->select('u.name as NAME', 'r.notes as NOTE')
    	->orderBy('r.notes', 'desc')
		->take('10')
    	->get();*/

		    $consulta = \DB::select(' SELECT u.name as NAME, r.notes as NOTE
				from reviews as r
					inner join teachers t
						on r.id=t.id
					inner join users u
						on u.id=t.id_user
				order by r.notes desc
				limit 10;');

		    return view('/Reports/Top10General', [
    		'consulta' => $consulta
    		]);
    	
    }
}
