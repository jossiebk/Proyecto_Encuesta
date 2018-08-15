<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class SearchController extends Controller
{
    public function show(Request $request){

    	//Validaciones
        $rules = [
            'user_name' => 'required|alpha_spaces',
        ];
        //Mensajes
        $messages = [
            'user_name.required' => 'Error! Se debe ingresar el nombre a buscar',
            'user_name.alpha_spaces' => 'Error! Se deben ingresar unicamente letras',
        ];
        $this->validate($request, $rules, $messages);
    	$name = $request->input('user_name');
    	$users = User::where('name', 'like', '%'.$name.'%')->get();
    	return view('search.show')->with(compact('users'));
    }

}
