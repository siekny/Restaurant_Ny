<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Name');
            $table->String('email');
            $table->String('phone');
            $table->dateTime('date');
            $table->timestamp('time');
            $table->integer('numPersons');
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
        Schema::dropIfExists('table_bookings');
    }
}
