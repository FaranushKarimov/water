<?php

use Faker\Generator as Faker;

$factory->define(App\Irrigation::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'district' => $faker->word,
        'region' => $faker->word,
        'republic' => $faker->country,
        'source' => $faker->address,
    ];
});
