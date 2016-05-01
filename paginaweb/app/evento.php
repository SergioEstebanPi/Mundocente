<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
      protected $table ="EVENTOS";
    protected $fillable =['NOMBRE_EVENTO','FECHA_CIERRE_EVENTO','CONTACTO_EVENTO','CATEGORIA_EVENTO','DIRECCION_EVENTO'];
}
