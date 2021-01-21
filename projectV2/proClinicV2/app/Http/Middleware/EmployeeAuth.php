<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployeeAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=="emppatients" && !$request->session()->has('employee'))
        {
            return redirect('/loginEmp');
        }
        // if($request->path()=="contro"||$request->path()=="employees" && !$request->session()->has('admin'))
        // {
        //     return redirect('/loginEmp');
        // }

        //else{return redirect('/loginEmp');}
        return $next($request);
    }
}
