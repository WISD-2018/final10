<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problems';

    public function user(){
        return $this->belongsTo(User::class,'id','stu_id');
    }
}
