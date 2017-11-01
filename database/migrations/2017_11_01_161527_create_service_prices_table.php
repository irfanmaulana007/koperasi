<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_service_price', function (Blueprint $table) {
            $table->increments('service_price_id');
            $table->integer('service_type_id')->unsigned();
            $table->integer('service_min_weight');
            $table->string('origin', 20);
            $table->string('destination', 20);
            $table->string('service_area', 10);
            $table->integer('service_price');
            $table->integer('service_rating');
            $table->string('estimation_time_min', 10);
            $table->string('estimation_time_max', 10);
            $table->timestamps();

            $table->foreign('service_type_id')->references('service_type_id')->on('ms_service_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_service_price');
    }
}
