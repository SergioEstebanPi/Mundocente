<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleo extends Model
{
     protected $table ="EMPLEOS";
    protected $fillable =['NOMBRE_EMPLEO','FECHA_CIERRE_EMPLEO','CONTACTO_EMPLEO','TIPO_CONTRATO','SALARIO_EMPLEO'];
}
