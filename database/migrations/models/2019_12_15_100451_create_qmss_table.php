<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQmssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qmss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('irrigation_id')->unsigned()->nullable();
            $table->integer('hydropost_id')->unsigned()->nullable();

            $table->double('qms_avg')->nullable();
            $table->double('volume_w')->nullable();

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
        Schema::dropIfExists('qmss');
    }
}
