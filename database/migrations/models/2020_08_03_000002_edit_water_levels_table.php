<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditWaterLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('water_levels', function (Blueprint $table) {
            $table->string('height_h_8')->after('height_h');
            $table->dropColumn('height_h');
    
            if (!Schema::hasColumn('water_levels', 'height_h_12')) {
                $table->double('height_h_12')->nullable();
            }
    
            if (!Schema::hasColumn('water_levels', 'height_h_16')) {
                $table->double('height_h_16')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('water_levels', function (Blueprint $table) {
            $table->renameColumn('height_h_8','height_h');
            $table->dropColumn('height_h_12');
            $table->dropColumn('height_h_16');
        });
    }
}
