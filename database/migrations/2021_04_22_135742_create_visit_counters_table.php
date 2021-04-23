<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_counters', function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned();
            $table->string('session_id')->unique();
            $table->string('IP');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('visited_page');
            $table->integer('views')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_counters');
    }
}
