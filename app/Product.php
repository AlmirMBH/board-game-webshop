<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model // Authenticatable
{
    protected $table = 'products';

    protected $guarded = [];

    public $directory = '/img/product/';

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }

    public function product_galleries()
    {
        return $this->hasMany(ProductGallery::class);
    }


    public function order(){
        return $this->belongsTo(Order::class);
    }

}
