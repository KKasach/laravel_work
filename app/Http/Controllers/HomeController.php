<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function postIndex(ProductRequest $r)
	{
		//dd($r->all());
		if($_FILES){
			$picture = \App::make('\App\Libs\imag')->url($_FILES['pic']['tmp_name']);
			
			//тоже что и вверху 
			//$picture = new App\Libs\Imag; $picture->url($_FILES['pic']['tmp_name']);
			
		} else {
			$picture='';
		}
		
		
		$r['photo']=$picture;
		//$r['user']=Auth::user()->id;
		
		Product::create($r->all());
		return redirect('home');
	}
}
