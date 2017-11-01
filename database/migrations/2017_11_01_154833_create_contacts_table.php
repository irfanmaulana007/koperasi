<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_contact', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->integer('entity_id')->unsigned();
            $table->integer('contact_type_id')->unsigned();
            $table->string('contact_name', 150);
            $table->string('contact_position', 150);
            $table->string('phone', 12);
            $table->string('email', 150);
            $table->string('socialmedia', 150);
            $table->timestamps();

            $table->foreign('entity_id')->references('entity_id')->on('ms_entity');
            // $table->foreign('contact_type_id')->references('contact_type_id')->on('ms_contact_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_contact');

    }
}
