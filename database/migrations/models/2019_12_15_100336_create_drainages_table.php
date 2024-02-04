<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrainagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drainages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('river_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->string('woc')->nullable();
            $table->string('type')->nullable();

            $table->text('location_of_drain')->nullable();
            $table->integer('year_of_commissioning')->unsigned()->nullable();

            $table->double('top_width')->unsigned()->nullable();
            $table->double('bottom_width')->unsigned()->nullable();
            $table->double('depth')->unsigned()->nullable();
            $table->double('length')->unsigned()->nullable();
            $table->double('water_protection_strips')->unsigned()->nullable();
            $table->text('technical_condition')->nullable();

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
        Schema::dropIfExists('drainages');
    }
}
