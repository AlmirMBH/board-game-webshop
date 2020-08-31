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
        $providerBotta->company_name = 'BOTTA Event-Factory';
        $providerBotta->name = 'Herr Marco Botta';
        $providerBotta->address = 'Frauwisstrasse 18, 8493';
        $providerBotta->phone = '044 946 24';
        $providerBotta->mobile = '071 571 36 24';
        $providerBotta->url = 'www.event-factory.ch';
        $providerBotta->email = 'info@event-factory.ch';
        $providerBotta->city_id = 1;
        $providerBotta->slug = 'botta-event-factory';
        $providerBotta->save();

        $providerTobler = new Provider();
        $providerTobler->company_name = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->city_id = 2;
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company_name = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->city_id = 3;
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company_name = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->city_id = 4;
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company_name = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->city_id = 5;
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company_name = 'Tobler Grafik';
        $providerTobler->name = 'Janik Tobler';
        $providerTobler->address = 'Seestrasse 21, 9326';
        $providerTobler->phone = '';
        $providerTobler->mobile = '071 571 36 24';
        $providerTobler->url = 'www.toblergrafik.ch';
        $providerTobler->email = 'j.tobler@toblergrafik.ch';
        $providerTobler->city_id = 6;
        $providerTobler->slug = 'tobler-grafik';
        $providerTobler->save();
    }
}
