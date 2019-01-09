<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';


    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'id','res_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }

    public function praise(){
        return $this->hasMany(Praise::class,'art_id','id');
    }

    public function message(){
        return $this->hasMany(Message::class,'art_id','id');
    }
}
