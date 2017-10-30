<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_entity', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->string('entity_type_id', 10)->nullable();
            $table->string('domain_id', 10)->nullable();
            $table->string('entity_name', 50);
            $table->string('entity_status', 100);
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
        Schema::dropIfExists('ms_entity');
    }
}
