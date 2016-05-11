<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {

        switch ($this->auth->user()->idrol) {
            case '1':
                # code...
                return redirect()->to('docente');
                break;
            case '2':
                # code...
                return redirect()->to('funcionario');
                break;
            case '3':
                # code...
                //return redirect()->to('admin/paneladmin');
                break;
            
            default:
                # code...
                return redirect()->to('/');
                break;
        }
        return $next($request);
    }
}
