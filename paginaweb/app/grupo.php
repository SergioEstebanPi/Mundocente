<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    protected $table ="GRUPOS";
    protected $fillable =['id_publicacion','id_area', 'created_at', 'updated_at'];
}
