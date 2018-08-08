<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //$review->user (Usuario que realizo la evaluacion)
    public function user(){
    	return $this->belongsTo(User::class);
    }

    //$review->userEvaluated (Catedratico o auxiliar evaluado)
    public function userEvaluated(){
    	return $this->belongsTo(User::class, 'id', 'id_user_evaluated');
    }
}
