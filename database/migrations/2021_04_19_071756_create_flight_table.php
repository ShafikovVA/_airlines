<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('flight_name');
            $table->unsignedBigInteger('where_point_id');
            $table->unsignedBigInteger('from_point_id');
            $table->datetime('time');
            $table->datetime('estimated_time');
            $table->char('terminal', 1);
            $table->string('status');
            $table->foreign('from_point_id')->references('id')->on('from_point');
            $table->foreign('where_point_id')->references('id')->on('where_point');
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
        Schema::dropIfExists('flight');
    }
}
