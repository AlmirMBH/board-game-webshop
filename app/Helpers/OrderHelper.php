<?php


namespace App\Helpers;


class OrderHelper
{
    public static function grandTotal($items){
        $grandTotal = null;
        $quantity = null;
        $subtotal = null;

        foreach ($items as $item) {
            $quantity += $item->item_quantity;
            $subtotal += $item->item_sub_total;
        }

        if ($quantity < 3) {
            $grandTotal = $subtotal + 7;
        } else {
            $grandTotal = $subtotal;
        }

        return $grandTotal;
    }

    public static function subtotal($items){
        $subtotal = null;
            foreach ($items as $item) {
                $subtotal += $item->item_sub_total;
            }

        return $subtotal;
    }

    public static function getCartQuantity($items){
        $quantity = null;
            foreach ($items as $item) {
                $quantity += $item->item_quantity;
            }

        return $quantity;
    }
}
