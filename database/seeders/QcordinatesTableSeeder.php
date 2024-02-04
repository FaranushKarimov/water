<?php

use Illuminate\Database\Seeder;

class QcordinatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qcordinate::class, 50)->create();
        /*->each(function ($qcordinate) {
	        $qcordinate->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
