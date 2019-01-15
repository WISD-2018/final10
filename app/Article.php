<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'res_id',
        'stu_id',
        'title',
        'content',
        'report',
        'photo',
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'res_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'stu_id','id');
    }

    public function praise(){
        return $this->hasMany(Praise::class,'art_id','id');
    }

    public function message(){
        return $this->hasMany(Message::class,'art_id','id');
    }
}
