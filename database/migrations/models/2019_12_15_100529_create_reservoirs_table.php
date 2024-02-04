<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservoirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basin_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();
            
            $table->string('woc')->nullable();

            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('republic')->nullable();
            $table->string('administration')->nullable();

            $table->string('type')->nullable();
            $table->text('purpose')->nullable();
            $table->string('dam_type')->nullable();
            $table->string('watercourse')->nullable();

            $table->double('dam_height')->nullable();
            $table->double('total_vol_ml_cub_m')->nullable();
            $table->double('net_vol_ml_cub_m')->nullable();
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
        Schema::dropIfExists('reservoirs');
    }
}
