<?php

use Illuminate\Database\Seeder;

class DrainagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Drainage::class, 50)->create();
        /*->each(function ($drainage) {
	        $drainage->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
