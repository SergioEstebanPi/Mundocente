<?php

namespace App\Http\Middleware;

use Closure;

class Docente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        switch ($this->auth->user()->idrol) {
            case '1':
                # code...
                //return redirect()->to('docente/paneldocente');
                break;
            case '2':
                # code...
                return redirect()->to('funcionario/panelfuncionario');
                break;
            case '3':
                # code...
                return redirect()->to('admin/paneladmin');
                break;
            
            default:
                # code...
                return redirect()->to('/');
                break;
        }
        return $next($request);
    }
}
