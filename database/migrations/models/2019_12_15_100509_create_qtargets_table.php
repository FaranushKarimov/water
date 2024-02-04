<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQtargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtargets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wua_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();

            $table->double('qms_plan_per_day')->nullable();

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
        Schema::dropIfExists('qtargets');
    }
}
