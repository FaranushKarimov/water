<?php

use Illuminate\Database\Seeder;

class CatchmentAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CatchmentArea::class, 50)->create();
        /*->each(function ($catchment_area) {
	        $catchment_area->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
