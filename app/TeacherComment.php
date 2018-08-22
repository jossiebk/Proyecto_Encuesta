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
        'comment','commentN', 'score', 'id_teacher',
    ];

    //$TeacherComment->teacher (Usuario que realizo la evaluacion)
    public function teacher(){
    	return $this->belongsTo(Teacher::class, 'id');
    }
}
