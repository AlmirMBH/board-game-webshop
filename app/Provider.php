<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "providers";

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function cantons()
    {
        return $this->belongsToMany(Canton::class);
    }
}
