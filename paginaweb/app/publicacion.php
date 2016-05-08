<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    protected $table ="PUBLICACIONES";
    protected $fillable =['id','id_funcionario','id_lugar','nombre','type','fecha_publicacion','fecha_cierre','requisitos', 'contacto', 'url', 'created_at', 'updated_at'];
}
