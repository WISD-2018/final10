<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praise extends Model
{
    protected $table = 'praises';

    protected $fillable = [
        'art_id',
        'stu_id',
        'praise',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }
    public function article(){
        return $this->belongsTo(Article::class,'id','art_id');
    }
}
