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
        // if($request->path()=="loginEmp" && $request->session()->has('employee'))
        // {
        //     return redirect('/emppatients');
        // }else{return redirect('/loginEmp');}
        return $next($request);
    }
}
