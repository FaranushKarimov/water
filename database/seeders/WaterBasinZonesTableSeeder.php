<?php

use Illuminate\Database\Seeder;

class WaterBasinZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WaterBasinZone::class, 50)->create();
        /*->each(function ($water_basin_zone) {
	        $water_basin_zone->posts()->save(factory(App\Post::class)->make());
	    });*/

    }
}
