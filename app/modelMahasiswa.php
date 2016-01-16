<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelMahasiswa extends Model
{
    protected $table="mahasiswa";
    protected $primaryKey="nim";
    

    // public function getAbsence(){

    // 	return $this->belongsTo('App\modelMahasiswa')
    // }    
}
