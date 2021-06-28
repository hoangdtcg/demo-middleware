<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
//        dd($request->age);
        $age = $request->age;
        if($age < 18){
            $notice = "Bạn chưa đủ tuổi!";
//            return response()->view('admin.login',compact('notice'));
            return redirect()->route('admin.showLoginForm')->with(['notice'=>$notice]);
        }
        return $next($request);
    }
}
