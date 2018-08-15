<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherComment extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment', 'score', 'id_teacher'
    ];

    //$review->user (Usuario que realizo la evaluacion)
    public function user(){
    	return $this->belongsTo(User::class, 'id_teacher');
    }

  
}
