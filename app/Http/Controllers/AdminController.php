<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;


class AdminController extends Controller
{
    //
	 public function getIndex(Request $request){
		 //dd($request->products);
		 
		 if ($request->products){
			
			$products=$request->products;
			
			return view('admin',compact('products'));
			
		 } else {
			 return view('product');
		 }
		 
		 
	 }
	 
}
