<?php

use App\Canton;
use App\City;
use App\Outlets;
use App\Provider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Canton::class, 9)->create();
        factory(City::class, 9)->create();
        factory(Provider::class, 9)->create();
        factory(Outlets::class, 9)->create();
    }
}
