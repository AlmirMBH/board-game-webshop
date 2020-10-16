<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCustomer extends Model
{
    protected $table = 'order_customers';

    protected $guarded = [];

    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

}
