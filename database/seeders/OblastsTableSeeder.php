<?php

use Illuminate\Database\Seeder;

class OblastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Oblast::class, 50)->create();
        /*->each(function ($oblast) {
	        $oblast->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
