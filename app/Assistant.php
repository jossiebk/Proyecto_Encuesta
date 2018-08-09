<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birthdate', 'image', 'credits', 'personal_description', 'academic_experience_1', 'academic_experience_2', 'academic_experience_3', 'work_experience_1', 'work_experience_2', 'work_experience_3', 'references', 'id_user',
    ];

    //$assistant->user
    public function user(){
    	return $this->belongsTo(User::class, 'id_user'); 
    }

    //$assistant->courses
    public function courses(){
        return $this->belongsToMany(Course::class, 'assistant_course', 'id_assistant', 'id_course');
    }
}
