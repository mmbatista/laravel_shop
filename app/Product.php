<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];

	
    public function buys()
    {
    	return $this->hasMany(Buy::class);
    }

    public function brand()
    {
    	return $this->belongsto(Brand::class);
    }

    public function delete()
    {
       $this->buys()->delete();

       return parent::delete();
    }
}
