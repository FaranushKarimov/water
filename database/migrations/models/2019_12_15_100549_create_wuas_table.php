<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wuas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('billing_id')->unsigned()->nullable();
            $table->integer('basin_id')->unsigned()->nullable();
            $table->integer('irrigation_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->integer('canal_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->text('service_area')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('republic')->nullable();

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
        Schema::dropIfExists('wuas');
    }
}
