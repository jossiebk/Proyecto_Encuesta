<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //$teacher->user
    public function user(){
    	return $this->belongsTo(User::class);
    }

}
