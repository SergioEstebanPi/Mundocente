<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
     protected $table ="GRUPOS";
    protected $fillable =['ID_PUBLICACION','ID_AREA'];
}
