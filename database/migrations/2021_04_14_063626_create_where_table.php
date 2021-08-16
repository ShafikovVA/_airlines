<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('where_point', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedMediumInteger('country_id');
            $table->unsignedInteger('city_id');
            $table->foreign('country_id')->references('id_country')->on('country');
            $table->foreign('city_id')->references('id_city')->on('city');
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
        Schema::dropIfExists('where_point');
    }
}
