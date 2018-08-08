<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    //$assistant->user
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
