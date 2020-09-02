<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $guarded = [];

    protected $table = "cantons";

    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'canton_provider_group', 'canton_id', 'provider_id');
    }
}
