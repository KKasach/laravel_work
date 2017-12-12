<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Product;
	

class AdminMiddleware
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
		
		if (Auth::guest()){
			 		   return redirect('/login');
		 } 
		 
		if(Auth::user()->role_id !=1){
				return redirect('/home');
		};
		
		$products = Product::where('photo', null)->get();
		$request->merge(compact('products'));
		
	
        return $next($request);
    }
}
