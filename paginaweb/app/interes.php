<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interes extends Model
{
     protected $table ="INTERESES";
    protected $fillable =['ID_AREA','ID_DOCENTE'];
}
