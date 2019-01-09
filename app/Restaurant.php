<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    public function score(){
        return $this->hasMany(Score::class,'res_id','id');
    }

    public function article(){
        return $this->hasMany(Article::class,'res_id','id');
    }

}
