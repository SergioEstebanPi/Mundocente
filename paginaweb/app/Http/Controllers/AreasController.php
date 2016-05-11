<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AreasController extends Controller
{
    //
    public function index(){

    }

    public function create(){

    }

    public function store(Requests $request){
    	App\areas::create([
    		'name' => $request['name'],
    		'email' => $request['email']
    	]);

    	return echo "Usuario registrado";
    }

    public function show($id){

    }
}
