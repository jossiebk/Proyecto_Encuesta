<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssistantComment extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment', 'commentN','score', 'id_assistant',
    ];

    //$TeacherComment->teacher (Usuario que realizo la evaluacion)
    public function assistant(){
    	return $this->belongsTo(Assistant::class, 'id');
    }
}