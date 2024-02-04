<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Region::class, 50)->create();
        /*->each(function ($region) {
	        $region->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
