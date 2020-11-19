<?php

use App\Canton;
use App\City;
use App\Outlets;
use App\ParticipatingCompanies;
use App\Product;
use App\Provider;
use App\User;
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
            CantonSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            ProviderSeeder::class,
            ProductSeeder::class,
            OutletSeeder::class,
            CantonProviderGroupSeed::class
        ]);
//        factory(Outlets::class, 10)->create();
//        factory(City::class,10)->create();
//        factory(Product::class, 10)->create();
//        factory(ParticipatingCompanies::class, 10)->create();
    }
}
