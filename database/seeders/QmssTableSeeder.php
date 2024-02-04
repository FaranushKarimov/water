<?php

use Illuminate\Database\Seeder;

class QmssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qms::class, 50)->create();
        /*->each(function ($qms) {
	        $qms->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
