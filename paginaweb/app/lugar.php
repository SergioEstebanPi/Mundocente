<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected $table ="LUGARES";
    protected $fillable =['id','id_ubicacion','nombre', 'type', 'creaeted_at', 'updated_at'];
}
