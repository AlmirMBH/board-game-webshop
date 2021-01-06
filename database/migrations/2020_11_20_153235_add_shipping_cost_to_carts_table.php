<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShippingCostToCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('item_shipping_cost')->after('item_sub_total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('item_shipping_cost');
        });
    }
}
