<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basin_id')->unsigned()->nullable();
            $table->integer('wua_id')->unsigned()->nullable();
            $table->integer('river_id')->unsigned()->nullable();
            
            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('republic')->nullable();

            $table->string('source')->nullable();
            $table->integer('year_of_commissioning')->unsigned()->nullable();
            $table->text('material')->nullable();
            $table->double('bandwidth')->nullable();
            $table->double('top_width')->nullable();
            $table->double('bottom_width')->nullable();
            $table->double('depth')->nullable();
            $table->double('length')->nullable();
            $table->double('serviced_land')->nullable();
            $table->double('water_protection_strips')->nullable();
            $table->integer('number_of_water_outlets')->unsigned()->nullable();
            $table->text('technical_condition')->nullable();
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('canals');
    }
}
