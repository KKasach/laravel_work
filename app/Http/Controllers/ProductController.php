<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
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
	
	public function getCat($id =0){
		$cat=Catalog::find($id);
		return view('catalog', compact('cat'));
	}
	
}

