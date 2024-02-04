<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wua_id')->unsigned()->nullable();
            $table->integer('hydropost_id')->unsigned()->nullable();

            $table->text('description')->nullable();
            $table->smallInteger('type')->nullable(); // 1 for hydropost, 2 for wua
            $table->integer('volume_1')->unsigned()->nullable(); // decada 1
            $table->integer('volume_2')->unsigned()->nullable(); // decada 2
            $table->integer('volume_3')->unsigned()->nullable(); // decada 3

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
        Schema::dropIfExists('decadas');
    }
}
