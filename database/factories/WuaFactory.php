<?php

use Faker\Generator as Faker;

$factory->define(App\Wua::class, function (Faker $faker) {
    return [
        'billing_id' => $faker->unique()->numberBetween(1,100),
        'basin_id' => $faker->randomDigit,
        'irrigation_id' => $faker->randomDigit,
        'region_id' => $faker->randomDigit,
        'canal_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'service_area' => $faker->country,
        'district' => $faker->address,
        'region' => $faker->streetName,
        'republic' => $faker->country,
    ];
});
