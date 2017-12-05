<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Catalog extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'catalog';
    
    protected $fillable = [
          'name',
          'body',
          'meta',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        Catalog::observe(new UserActionsObserver);
    }
	
	public function products(){
		return $this->hasMany(\App\Product::class, 'catalogs_id');
	}
    
    
    
    
}