<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\Helper;

class IsLoggedIn
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
            if($status['isLogin']){
                $helper->flashError("You are already logged in!");
                return redirect()->back();             
            }
        }
    return $next($request);
    
    }
}
