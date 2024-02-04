<?php

use Illuminate\Database\Seeder;

class IrrigationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Irrigation::class, 50)->create();
        /*->each(function ($irrigation) {
	        $irrigation->posts()->save(factory(App\Post::class)->make());
	    });*/
    }
}
