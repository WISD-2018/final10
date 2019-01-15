<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problems';

    protected $fillable = [
        'stu_id',
        'title',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }
}
