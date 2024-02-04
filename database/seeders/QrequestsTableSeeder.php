<?php

use Illuminate\Database\Seeder;

class QrequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qrequest::class, 50)->create();
        /*->each(function ($qrequest) {
	        $qrequest->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
