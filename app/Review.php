<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'puntuality', 'knowledge', 'presentation', 'notes', 'assistance', 'comment', 'id_user_evaluator', 'id_user_evaluated', 'id_course',
    ];

    //$review->user (Usuario que realizo la evaluacion)
    public function user(){
    	return $this->belongsTo(User::class, 'id_user_evaluator');
    }

    //$review->userEvaluated (Catedratico o auxiliar evaluado)
    public function userEvaluated(){
    	return $this->belongsTo(User::class, 'id_user_evaluated');
    }
}
