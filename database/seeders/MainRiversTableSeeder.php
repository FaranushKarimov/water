<?php

use Illuminate\Database\Seeder;

class MainRiversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MainRiver::class, 50)->create();
        /*->each(function ($main_river) {
	        $main_river->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
