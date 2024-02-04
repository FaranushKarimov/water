<?php

use Illuminate\Database\Seeder;

class QwuasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qwua::class, 50)->create();
        /*->each(function ($qwua) {
	        $qwua->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
