<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citySalande = new City();
        $citySalande->name = 'Saland';
        $citySalande->is_available = false;
        $citySalande->canton_id = 1;
        $citySalande->save();

        $cityHorn = new City();
        $cityHorn->name = 'Horn';
        $cityHorn->is_available = false;
        $cityHorn->canton_id = 2;
        $cityHorn->save();

        $cityHorn = new City();
        $cityHorn->name = 'Horn';
        $cityHorn->is_available = false;
        $cityHorn->canton_id = 3;
        $cityHorn->save();

        $cityHorn = new City();
        $cityHorn->name = 'Horn';
        $cityHorn->is_available = false;
        $cityHorn->canton_id = 4;
        $cityHorn->save();

        $cityHorn = new City();
        $cityHorn->name = 'Horn';
        $cityHorn->is_available = false;
        $cityHorn->canton_id = 6;
        $cityHorn->save();

        $cityHorn = new City();
        $cityHorn->name = 'Horn';
        $cityHorn->is_available = false;
        $cityHorn->canton_id = 9;
        $cityHorn->save();
    }
}
