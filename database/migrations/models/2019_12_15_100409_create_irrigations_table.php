<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrrigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irrigations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basin_id')->unsigned()->nullable();

            $table->text('name_ru')->nullable();
            $table->text('name_tj')->nullable();
            $table->text('name_en')->nullable();

            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('republic')->nullable();
            $table->string('source')->nullable();

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
        Schema::dropIfExists('irrigations');
    }
}
