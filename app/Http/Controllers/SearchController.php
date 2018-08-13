<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class SearchController extends Controller
{
    public function show(Request $request){
    	$name = $request->input('user_name');
    	$users = User::where('name', 'like', '%'.$name.'%')->get();
    	if($users){
    		return view('search.show')->with(compact('users'));
    	}
    }

}
