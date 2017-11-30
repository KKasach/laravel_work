<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
	public function getAll(){
		$all = Product::all();
		//dd($all);
		//$all=Product::where ('catalog_id', $id->get())
		
		return view('products',compact('all'));
	}
	public function getOne($id){
		echo $id;
		$product = Product::find($id);
		return view('product',compact('product'));
	}
}

