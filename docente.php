<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
  public $timestamps = false;

     protected $table ="DOCENTES";
    protected $fillable =['NOMBRE_DOCENTE','APELLIDO_DOCENTE','FECHA_NACIMIENTO','GENERO','DESCRIPCION_PROFESION'];
}
