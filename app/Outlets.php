<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlets extends Model
{
    protected $table = 'outlets';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
