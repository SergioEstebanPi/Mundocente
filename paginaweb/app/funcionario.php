<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table ="FUNCIONARIOS";
    protected $fillable =['id','id_establecimientos','nombre','apellido','email','password', 'type', 'created_at', 'updated_at'];
}
