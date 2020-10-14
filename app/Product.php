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

    public function galleries()
    {
        return $this->hasOne('App\ProductGallery');

    }

}
