<?php

use Illuminate\Database\Seeder;

class QtargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qtarget::class, 50)->create();
        /*->each(function ($qtarget) {
	        $qtarget->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
