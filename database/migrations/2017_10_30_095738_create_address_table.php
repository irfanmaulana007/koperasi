<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_address', function (Blueprint $table) {
            $table->increments('address_id');
            $table->string('entity_id, 10')->nullable();
            $table->string('city_id', 10)->nullable();
            $table->string('district_id', 10)->nullable();
            $table->string('address_type_id', 10)->nullable();
            $table->string('address_name', 50);
            $table->string('postal_code', 5)->nullable();
            $table->string('address_description', 100);
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
        Schema::dropIfExists('ms_address');
    }
}
