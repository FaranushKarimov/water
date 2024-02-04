<?php

use Illuminate\Database\Seeder;

class WuasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wua::class, 50)->create();
        /*->each(function ($wua) {
	        $wua->posts()->save(factory(App\Post::class)->make());
	    });*/
        //$faker = \Faker\Factory::create();


    }
}
