<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hydropost_id')->unsigned()->nullable();

            $table->double('height_h')->nullable();
            $table->double('flow_q')->nullable();

            $table->boolean('dynamic')->default(false);

            $table->date('date')->default(\Carbon\Carbon::now()->format('Y-m-d'));

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
        Schema::dropIfExists('water_levels');
    }
}
