<?php

use Illuminate\Database\Seeder;
use App\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Catalog::insert([
		'name'=>'Копмпьютеры',
		'body'=>'Описание',
		'status'=>'Открыта',
		'meta'=>'позиция',
		]);
		
		//$obj = new Catalog;
		//$obj->name = 'neoriughan';
		
		
    }
}
