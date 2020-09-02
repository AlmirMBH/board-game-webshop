<?php

use App\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providerBotta = new Provider();
        $providerBotta->company = 'BOTTA Event-Factory';
        $providerBotta->name = 'Herr Marco Botta';
        $providerBotta->address = 'Frauwisstrasse 18, 8493 Saland';
        $providerBotta->phone = '044 946 24';
        $providerBotta->mobile = '071 571 36 24';
        $providerBotta->web_url = 'www.event-factory.ch';
        $providerBotta->email = 'info@event-factory.ch';
        $providerBotta->slug = 'botta-event-factory';
        $providerBotta->save();

        $providerTobler = new Provider();
        $providerTobler->company = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326 Horn';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->web_url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();
    }
}
