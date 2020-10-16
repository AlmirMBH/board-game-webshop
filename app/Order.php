<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(OrderCustomer::class, 'order_id');
    }
}
