<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainRiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_rivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basin_id')->unsigned()->nullable();
            $table->integer('catchment_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->text('woc')->nullable();

            $table->string('region')->nullable();
            $table->string('republic')->nullable();

            $table->double('length')->nullable();
            $table->double('annual_drain')->nullable();
            $table->double('watershed_area')->nullable();

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
        Schema::dropIfExists('main_rivers');
    }
}
