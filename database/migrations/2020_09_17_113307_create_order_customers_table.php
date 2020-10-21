<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_customers', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company')->nullable();
            $table->string('state');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('post_code');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_customers');
    }
}
