<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class units extends Model
{
    //

    public function lessons(){
        return $this->hasMany('App\lessons');
    }
}
