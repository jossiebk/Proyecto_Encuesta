<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'description', 'id_faculty', 'id_school', 'id_academic_unit',
    ];

    //$course->teachers
    public function teachers(){
    	return $this->belongsToMany(Teacher::class, 'course_teacher', 'id_teacher', 'id_course');
    }

    //$course->assistants
    public function assistants(){
        return $this->belongsToMany(Assistant::class, 'assistant_course', 'id_assistant', 'id_course');
    }
}
