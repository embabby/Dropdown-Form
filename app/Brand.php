<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','company_id'];

    public function branches(){
      return $this->hasMany('App\Branch');
  	}
    
}
