<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
	protected $guarded = [];
	
    
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
    

}
