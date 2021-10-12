<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cookie;

class checkUser
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
        // if($request->session()->has('token') == null){
        //     // return view('front.index')->with('message', 'Please Login first');
        //     return redirect()->route('view_home')->with('message', 'Please Login first');
        // }
        if($request->hasCookie('token') == null)
        {
            return redirect()->route('view_home')->with('message', 'Please Login first');
        }
        else{
            return $next($request);
        }
        
    }
}
