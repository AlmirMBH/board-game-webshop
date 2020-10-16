<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'GEWERBE-SPIEL';
        $product->short_description = "Das Gewerbe-Spiel.ch ist zur Zeit für nachfolgende Gemeinde/ Dörfer der Schweiz erhältlich. Wir haben die Ausführungen gemäss Kantone gegliedert. Monatlich kommen wieder neue Gemeinde/ Dörfer dazu. Gerne können Sie unseren Newsletter abonnieren (Verlinkung auf newsletter@gewerbe-spiel.ch), damit Sie nicht verpassen, wenn Ihr Dorf realisiert wird! <p>Der Preis pro Spiel beträgt Fr. 29.90 zusätzlich kommen folgende Portokosten (Paket Inland Post Economy) dazu:</p>";
        $product->long_description = "Das Gewerbe-Spiel.ch ist zur Zeit für nachfolgende Gemeinde/ Dörfer der Schweiz erhältlich. Wir haben die Ausführungen gemäss Kantone gegliedert. Monatlich kommen wieder neue Gemeinde/ Dörfer dazu. Gerne können Sie unseren Newsletter abonnieren (Verlinkung auf newsletter@gewerbe-spiel.ch), damit Sie nicht verpassen, wenn Ihr Dorf realisiert wird! <p>Der Preis pro Spiel beträgt Fr. 29.90 zusätzlich kommen folgende Portokosten (Paket Inland Post Economy) dazu:</p>";
        $product->price = 29.90;
        $product->quantity = 1;
        $product->featured_image = 0;
        $product->gallery = 0;

        $product->save();
    }
}
