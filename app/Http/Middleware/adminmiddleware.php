<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    
    public function handle( Request $request, Closure $next): Response
    { 
        if(Auth::check()){
             
            
            return $next($request);
        } 
        abort(401);

    }
}
