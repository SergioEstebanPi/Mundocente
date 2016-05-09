<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\funcionario;

class publicacion extends Model
{
    protected $table ="PUBLICACIONES";
    protected $fillable =['id','funcionario_id','id_lugar','nombre','type','fecha_publicacion','fecha_cierre','requisitos', 'contacto', 'url', 'created_at', 'updated_at'];

    public function funcionario(){
    	return $this->belongsTo('App\funcionario');
    }

    public function lugar(){
    	return $this->belongsTo('App\lugar');
    }
}