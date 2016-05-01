<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table ="FUNCIONARIOS";
    protected $fillable =['ID_ESTABLECIMIENTO','NOMBRE_FUNCIONARIO','APELLIDO_FUNCIONARIO','CARGO_FUNCIONARIO','CORREO_FUNCIONARIO','TELEFONO_FUNCIONARIO'];
}
