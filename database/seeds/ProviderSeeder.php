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

        $providerTobler = new Provider();
        $providerTobler->company = 'Aladins Wunder GmbH';
        $providerTobler->name = 'Herr Ernest Duarte';
        $providerTobler->address = 'Dorfstrasse 26, 8484 Weisslingen';
        $providerTobler->phone = '076  673 34 23';
        $providerTobler->mobile = '076 673 34 23';
        $providerTobler->web_url = 'www.aladinswunder.ch';
        $providerTobler->email = 'kontakt@aladinswunder.ch';
        $providerTobler->slug = 'aladins-wunder-gmbh';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company = 'Kinooris GmbH';
        $providerTobler->name = 'Herr Kim Rihm';
        $providerTobler->address = 'Kanonengasse 15, 4410 Liestal';
        $providerTobler->phone = '076 373 21 01';
        $providerTobler->mobile = '';
        $providerTobler->web_url = 'www.kinooris.ch';
        $providerTobler->email = 'info@kinooris.ch';
        $providerTobler->slug = 'kinooris-gmbh';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company = 'Lüscher Gastro Planung';
        $providerTobler->name = 'Herr René Lüscher';
        $providerTobler->address = 'Chaletweg 2, 4665 Oftringen';
        $providerTobler->phone = '062 797 38 71';
        $providerTobler->mobile = '079 648 00 15';
        $providerTobler->web_url = 'www.luescher-planung.ch';
        $providerTobler->email = 'info@luescher-planung.ch';
        $providerTobler->slug = 'luscher-gastro-planung';
        $providerTobler->save();

        $providerTobler = new Provider();
        $providerTobler->company = 'AK-Taxi';
        $providerTobler->name = 'Marco Kuhn';
        $providerTobler->address = 'Friedhofstrasse 2, 8330 Pfäffikon ZH';
        $providerTobler->phone = '+41797666622';
        $providerTobler->mobile = '+41797666622';
        $providerTobler->web_url = 'www.ak-taxi.ch';
        $providerTobler->email = 'info@ak-taxi.ch';
        $providerTobler->slug = 'ak-taxi';
        $providerTobler->save();
    }
}
