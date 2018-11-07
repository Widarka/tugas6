<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    public function Mhs(){
    	return $this->hasMany('App\Mhs');
    }
}
