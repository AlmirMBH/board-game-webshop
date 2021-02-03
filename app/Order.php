<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static $currency = 'CHF';
    protected $table = 'orders';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(OrderCustomer::class, 'order_id', 'order_id');
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProducts::class, 'order_id', 'order_id');
    }

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public static function getShippingCost($quantity)
    {
        return ($quantity < 3) ? 7 : 0;
    }

    public static function getCurrency($quantity)
    {
        $currency = null;
        if ($quantity < 3) {
            $currency = ' CHF';
            return $currency;
        }
        return '';
    }

    public static function shippingCost()
    {
        return "CHF 7.- für 1- 2 Spiele";
    }

    public static function freeShipping()
    {
        return "Ab 3 Spiele ist der Versand kostenlos!";
    }
}
