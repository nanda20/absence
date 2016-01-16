<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPetugas extends Model
{
    protected $table="petugas";
    protected $primaryKey="id";
    protected $fillable=['id','username','password','level'];

}
