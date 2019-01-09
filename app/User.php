<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
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

    public function score(){
        return $this->hasMany(Score::class,'stu_id','id');
    }

    public function article(){
        return $this->hasMany(Article::class,'stu_id','id');
    }

    public function message(){
        return $this->hasMany(Message::class,'stu_id','id');
    }

    public function praise(){
        return $this->hasMany(Praise::class,'stu_id','id');
    }

    public function problem(){
        return $this->hasMany(Problem::class,'stu_id','id');
    }
}
