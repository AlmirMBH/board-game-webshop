<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model // Authenticatable
{
    protected $table = 'products';

    protected $fillable = [
        'id', 'name', 'price', 'quantity'
    ];

    public $directory = '/img/product/';

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }

    public function product_galleries()
    {
        return $this->hasMany(ProductGallery::class);
    }


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    public function getProductName($id)
    {
        $product = Product::findOrFail($id);
        return $product->name;
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
