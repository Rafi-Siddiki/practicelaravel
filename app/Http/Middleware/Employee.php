<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if (auth()->user()->role !== 'employee') {
            if (auth()->user()->role === 'admin') {
                return redirect('admin/dashboard');
            } else {
                return redirect('customer/dashboard');
            }
        }

        return $next($request);
    }
}
