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
        $city = new City();
        $city->name = 'Pfäffikon ZH';
        $city->canton_id = 1;
        $city->save();

        $city = new City();
        $city->name = 'Langenthal BE';
        $city->canton_id = 7;
        $city->save();

        $city = new City();
        $city->name = 'Liestal BL';
        $city->canton_id = 8;
        $city->save();

        $city = new City();
        $city->name = 'Ebikon LU';
        $city->canton_id = 5;
        $city->save();

        $city = new City();
        $city->name = 'Appenzell AR';
        $city->canton_id = 3;
        $city->save();

        $city = new City();
        $city->name = 'Schaffhausen SH Gewerbe 	';
        $city->canton_id = 2;
        $city->save();

        $city = new City();
        $city->name = 'Schaffhausen SH Gastro 	';
        $city->canton_id = 2;
        $city->save();

        $city = new City();
        $city->name = 'Solothurn SO';
        $city->canton_id = 9;
        $city->save();

        $city = new City();
        $city->name = 'Chur GR';
        $city->canton_id = 6;
        $city->save();

        $city = new City();
        $city->name = 'Zug ZG';
        $city->canton_id = 4;
        $city->save();
    }
}
