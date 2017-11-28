<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
class BaseController extends Controller{
    public function getIndex(){
		$obj = Maintext::where('url','index')->first();
		//dd($obj);
	return view('index', compact('obj'));
	}
}
