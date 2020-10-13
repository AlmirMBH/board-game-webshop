<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = [];

    public $directory = '/img/product/';

    public function getPathAttribute($value){
        return $this->directory . $value;
    }

}
