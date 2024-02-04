<?php

use Illuminate\Database\Seeder;

class LakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lake::class, 50)->create();
        /*->each(function ($lake) {
	        $lake->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
