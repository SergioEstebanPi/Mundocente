<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interes extends Model
{
    protected $table ="INTERESES";
    protected $fillable =['id_area','id_docente', 'created_at', 'updated_at'];
}
