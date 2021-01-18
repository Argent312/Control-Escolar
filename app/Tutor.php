<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function alumns(){
        return $this->hasMany('App\Alumn');
    }
}
