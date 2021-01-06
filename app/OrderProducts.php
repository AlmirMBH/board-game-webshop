<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    protected $table = 'order_products';

    protected $guarded = [];

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
