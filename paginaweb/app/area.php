<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    protected $table ="AREAS";
    protected $fillable =['id', 'id_general', 'nombre', 'created_at', 'updated_at'];
}
