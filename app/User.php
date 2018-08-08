<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //$user->teacher
    public function teacher(){
        return $this->hasOne(Teacher::class);
    }

    //$user->assistant
    public function assistant(){
        return $this->hasOne(Assisant::class);
    }

    //$user->reviews (Encuestas que el usuario ha respondido)
    public function reviews(){
        return $this->hasMany(Review::class, 'id_user_evaluator');
    }

    //$user->myReviews (Encuestas donde se ha evaluado al catedratico o auxiliar)
    public function myReviews(){
        return $this->hasMany(Review::class, 'id_user_evaluated');
    }

}
