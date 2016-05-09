<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\publicacion;

class funcionario extends Model
{
    protected $table ="FUNCIONARIOS";
    protected $fillable =['id','id_establecimientos','nombre','apellido','email','password', 'type', 'created_at', 'updated_at'];

    public function publicacion(){
    	return $this->hasMany('App\publicacion');
    }

    public function establecimiento(){
    	return $this->belongsTo('App\establecimiento');
    }

}
