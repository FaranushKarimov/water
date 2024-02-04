<?php

use Illuminate\Database\Seeder;

class ReservoirsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reservoir::class, 50)->create();
        /*->each(function ($reservoir) {
	        $reservoir->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
