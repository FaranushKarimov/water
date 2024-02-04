<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHydropostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydroposts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('counter_hydropost_id')->nullable();
            $table->integer('wua_id')->unsigned()->nullable();
            $table->integer('basin_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->integer('year_of_commissioning')->unsigned()->nullable();

            $table->string('woc')->nullable();
            $table->string('type')->nullable();
            
            $table->text('district')->nullable();
            $table->text('region')->nullable();
            $table->text('republic')->nullable();
            $table->text('source')->nullable();
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
        Schema::dropIfExists('hydroposts');
    }
}
