<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $guarded = [];
	

    public function buys(){

    	return $this->hasMany(Buy::class);
    }

    public function delete()
    {
       $this->buys()->delete();

       return parent::delete();
    }
}
