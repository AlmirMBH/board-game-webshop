<?php

use Illuminate\Database\Seeder;

class CantonProviderGroupSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CantonProviderGroup::create([
            'canton_id' => 1,
            'provider_id' => 1
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 9,
            'provider_id' => 2
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 6,
            'provider_id' => 2
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 4,
            'provider_id' => 2
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 3,
            'provider_id' => 2
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 5,
            'provider_id' => 3
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 8,
            'provider_id' => 4
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 7,
            'provider_id' => 5
        ]);

        \App\CantonProviderGroup::create([
            'canton_id' => 2,
            'provider_id' => 6
        ]);
    }
}
