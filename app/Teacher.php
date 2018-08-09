<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birthdate', 'image', 'personal_description', 'academic_title_1', 'academic_title_2', 'academic_title_3', 'work_experience_1', 'work_experience_2', 'work_experience_3', 'references', 'id_user',
    ];

    //$teacher->user
    public function user(){
    	return $this->belongsTo(User::class, 'id_user');
    }

    //$teacher->courses
    public function courses(){
        return $this->belongsToMany(Course::class, 'course_teacher', 'id_teacher', 'id_course');
    }

}
