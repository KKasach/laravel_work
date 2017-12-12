<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Catalog;
class SiteComposer{
   
    public function compose(View $view)
    {
		$catalogs=Catalog::all();
		$view->with('catalogs', $catalogs);
		
		//$ur = url()->full();
		//$arr = explode('/', $ur);
		//$end = end($arr);
		//$view->with('end', $end);
    }
}

//$if($end == 'contact')
	//Контакты
//$else
	//<a href="#">Контакты</a>
//@endif

?>