<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $table = 'product_galleries';

    protected $fillable = ['title','image', 'product_id'];

    public function products(){
        return $this->belongsTo('App\Product');
    }
}
