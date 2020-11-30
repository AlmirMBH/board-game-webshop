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

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public static function getShippingCost($quantity)
    {
        $shipping = null;
        if ($quantity < 3) {
            return $shipping = '7.00';
        } else {
            return $shipping = "Kostenlos";
        }
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
