<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name','brand_id'];

    public function stands(){
      return $this->hasMany('App\Stand');
  	}
    
}
