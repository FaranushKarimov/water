<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterBasinZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_basin_zones', function (Blueprint $table) {
            $table->increments('id');

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->string('woc')->nullable();

            $table->double('area')->nullable();

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
        Schema::dropIfExists('water_basin_zones');
    }
}
