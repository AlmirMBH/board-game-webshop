<?php

use App\Canton;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $canton = new Canton();
        $canton->name = 'ZH';
        $canton->save();

        $canton2 = new Canton();
        $canton2->name = 'SH+TG';
        $canton2->save();

        $canton3 = new Canton();
        $canton3->name = 'SG+AR+AI+LI';
        $canton3->save();

        $canton4 = new Canton();
        $canton4->name = 'ZG+SZ+GL';
        $canton4->save();

        $canton5 = new Canton();
        $canton5->name = 'LU+NW+OW+UR';
        $canton5->save();

        $canton6 = new Canton();
        $canton6->name = 'GR';
        $canton6->save();

        $canton7 = new Canton();
        $canton7->name = 'BE';
        $canton7->save();

        $canton8 = new Canton();
        $canton8->name = 'BS+BL';
        $canton8->save();

        $canton9 = new Canton();
        $canton9->name = 'AG+SO';
        $canton9->save();
    }
}
