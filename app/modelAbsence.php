<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelAbsence extends Model
{
    protected $table="absence";
    protected $primaryKey="id";
    protected $fillable=['nim','tanggal','pesan'];

    public function dataAbsence(){

    	return $this->belongsTo('App\modelMahasiswa');
    }
}
