<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function School(){
        $escuelas = DB::table('schools')
                ->select('name')->get();
        //dd($escuelas);
        return view('/Reports/Top10AssistantPerSchool')->with(compact('escuelas'));
    }


    public function Top10AssisPerSchool(Request $request){
        $escuela = $request->input('school_name');
        $consulta = \DB::table('reviews as r')
        ->join('users as u','r.id_user_evaluated','=','u.id')
        ->join('assistants as t', 't.id_user', '=', 'u.id')
        ->join('courses as c','c.id','=','r.id_course')
        ->join('schools as sc','c.id_school','=','sc.id')
        ->select('u.name as NAME', 'r.notes as NOTE', 'c.name as COURSE')
        ->where('sc.name','=',$escuela)
        ->orderBy('r.notes', 'desc')
        ->take('10')
        ->get();


            return view('/Reports/Top10AuxGeneral', [
            'consulta' => $consulta
            ]);
        
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

            return view('/Reports/TopASP', [
            'consulta' => $consulta
            ]);

    }
}
