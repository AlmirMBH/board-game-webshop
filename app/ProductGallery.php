<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $table = 'product_galleries';

    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
