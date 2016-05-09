<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class establecimiento extends Model
{
    protected $table ="ESTABLECIMIENTOS";
    protected $fillable =['id','id_lugar','nombre','type', 'created_at', 'updated_at'];

    public function funcionario(){
    	
    }
}
