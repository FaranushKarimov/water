<?php

use Illuminate\Database\Seeder;

class HydropostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hydropost::class, 50)->create();
        /*->each(function ($hydropost) {
	        $hydropost->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
