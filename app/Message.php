<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'art_id',
        'stu_id',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class,'stu_id','id');
    }

    public function article(){
        return $this->belongsTo(Article::class,'id','art_id');
    }
}
