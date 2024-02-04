<?php

use Illuminate\Database\Seeder;

class WaterLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WaterLevel::class, 50)->create();
        /*->each(function ($water_level) {
	        $water_level->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
