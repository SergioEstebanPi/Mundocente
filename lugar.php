<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected $table ="LUGARES";
    protected $fillable =['ID_UBICACION','NOMBRE_LUGAR','TIPO_LUGAR'];
}
