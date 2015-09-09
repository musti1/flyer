<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flyer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street');
            $table->string('city', 40);
            $table->string('country', 40);
            $table->string('zip', 10);
            $table->integer('price');
            $table->string('state', 40);
            $table->string('description');
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
        Schema::drop('flyers');
    }
}
