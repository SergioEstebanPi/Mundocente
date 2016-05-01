<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revista extends Model
{
      protected $table ="REVISTAS";
    protected $fillable =['TEMA_REVISTA','FECHA_CIERRE_REVISTA','CONTACTO_REVISTA','URL_REVISTA'];
}
