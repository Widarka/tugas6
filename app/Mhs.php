<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    //
    public function prodi(){
    	return $this->belongsTo('App\Prodi', 'Prodi_id');
    }
}
