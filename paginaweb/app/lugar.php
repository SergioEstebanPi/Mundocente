<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected $table ="LUGARES";
    protected $fillable =['id','ubicacion_id','nombre', 'type', 'created_at', 'updated_at'];

    public function publicacion(){
    	return $this->hasMany('App\publicacion');
    }
}
