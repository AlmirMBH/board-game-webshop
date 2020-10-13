<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CantonProviderGroup extends Pivot
{
    protected $table = 'canton_provider_group';

    protected $guarded = [];
}
