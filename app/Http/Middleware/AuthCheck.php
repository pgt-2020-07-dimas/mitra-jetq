<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\Helper;

class AuthCheck
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
        $helper = new Helper();
        if (session()->has('userdata')){
        $status = session()->get('userdata');
        if($status['status']){
            return $next($request);
        }
        
        }
        $helper->flashError("You are not yet logged in!");
        return redirect('/login'); 
        
    }
}
