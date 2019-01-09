<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';


    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }

    public function article(){
        return $this->belongsTo(Article::class,'id','art_id');
    }
}
