<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocenteController extends Controller
{
    //
    public function index(){

    }

    public function create(){

    }

    public function store(Requests $request){
    	App\docente::create([
    		'name' => $request['name'],
    		'email' => $request['email'],
    		'password' => $request['password']
    	]);

    	return echo "Usuario registrado";
    }

    public function show($id){

    }
}
