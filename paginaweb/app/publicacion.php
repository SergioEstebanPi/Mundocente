<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
     protected $table ="PUBLICACIONES";
    protected $fillable =['ID_FUNCIONARIO','ID_REVISTA','ID_EVENTO','ID_EMPLEO','ID_LUGAR','TIPO_PUBLICACION','FECHA_PUBLICACION','DATOS_PUBLICACION'];
}
