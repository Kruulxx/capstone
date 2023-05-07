<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Adviser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $user=Auth::user();
        if($user->role==1){
            return $next($request);
        }
        if($user->role==2){
            return redirect('/teacher');
        }
        if($user->role==3){
            return redirect('/principal');
        }
        if($user->role==4){
            return redirect('/chairman');
        }
    }
}
