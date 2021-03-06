<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','area_id'];

    public function brands(){
      return $this->hasMany('App\Brand');
  	}
    
}
