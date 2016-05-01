<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class establecimiento extends Model
{
    protected $table ="ESTABLECIMIENTOS";
    protected $fillable =['ID_LUGAR','NOMBRE_ESTABLECIMIENTO','TIPO_ESTABLECIMIENTO','ACREDITACION'];
}
