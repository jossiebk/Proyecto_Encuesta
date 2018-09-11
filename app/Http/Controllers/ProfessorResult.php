<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorResult extends Controller
{
    //


    public function indexReporte3(Request $request){

    	$consulta = \DB::select(' SELECT cu.name as CURSO, (sum(r.puntuality)+sum(r.knowledge)+sum(r.presentation)+sum(r.notes)+sum(r.assistance))/5 as NOTA 
									FROM reviews as r
									inner join courses as cu
										on r.id_course=cu.id
									WHERE id_user_evaluated=15
									group by r.id_user_evaluated, r.id_course;');

    	return view('/perCat', [
    		'consulta' => $consulta
    		]);
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
    }

}
