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
        $this->call([
            CantonSeeder::class
        ]);
    }
}
