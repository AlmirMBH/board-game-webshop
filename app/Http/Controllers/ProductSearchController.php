<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $output = "";

        if ($request->ajax()) {
            $query = $request->get('search');

            if ($query !== null) {
                $products = Product::where('name', 'LIKE', $query . '%')->get();
                if (count($products) > 1) {
                    foreach ($products as $product) {
                        $output .= "<h2>$product->name</h2><br>";
                    }
                } else {
                    $output .= "Products not found for query " . $query;
                }
            }

        }

        return $output;
    }
}
