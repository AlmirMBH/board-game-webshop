<?php

use App\Outlets;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new Outlets();
        $outlet->name = 'MKW Marti Kälte- und Wärmetechnik';
        $outlet->address = 'Hueb 575, 9427 Wolfhalden';
        $outlet->phone = '+41793699583';
        $outlet->email = 'mkw@mkw-gmbh.ch';
        $outlet->city_id = 5;
        $outlet->slug = 'mkw-marti-kalte-und-warmetechnik';
        $outlet->save();

        $outlet = new Outlets();
        $outlet->name = 'Lindenbaum';
        $outlet->address = 'Wallikerstrasse 44, 8330 Pfäffikon ZH';
        $outlet->phone = '+41449533364';
        $outlet->email = 'a.schluessel@lindenbaum.ch';
        $outlet->city_id = 1;
        $outlet->slug = 'lindenbaum';
        $outlet->save();

        $outlet = new Outlets();
        $outlet->name = 'Hoflade Schür';
        $outlet->address = 'Schürstrasse 12';
        $outlet->phone = '+41449502144';
        $outlet->email = 'stefanie.hediger@bluemail.ch';
        $outlet->city_id = 1;
        $outlet->slug = 'hoflade-schur';
        $outlet->save();

        $outlet = new Outlets();
        $outlet->name = 'Ehriker Beck';
        $outlet->address = 'Hauptstrasse 42, 8489 Ehrikon';
        $outlet->phone = '+41523851284';
        $outlet->email = 'info@ehriker-beck.ch';
        $outlet->city_id = 1;
        $outlet->slug = 'ehriker-beck';
        $outlet->save();
    }
}
