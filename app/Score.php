<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';

    protected $fillable = [
        'res_id',
        'stu_id',
        'score',
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'id','res_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }
}
