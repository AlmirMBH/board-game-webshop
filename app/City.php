<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    protected $table = "cities";

    public function canton()
    {
        return $this->belongsTo(Canton::class, 'canton_id', 'id');
    }
}
