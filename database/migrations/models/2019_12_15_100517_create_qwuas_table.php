<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQwuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qwuas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wua_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();

            $table->double('qwua_avg')->nullable();
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
        Schema::dropIfExists('qwuas');
    }
}
