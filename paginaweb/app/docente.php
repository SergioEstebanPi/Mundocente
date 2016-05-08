<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
  public $timestamps = false;

    protected $table ="DOCENTES";
    protected $fillable =['id','nombre','apellido','email','password', 'type', 'created_at', 'updated_at'];
}
