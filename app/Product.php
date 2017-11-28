<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;
    public function productsizes(){
        return $this->hasMany('App\ProductSize','product_id');
    }
}
