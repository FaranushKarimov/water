<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Canal>
 */
class CanalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'basin_id' => $this->faker->randomDigit,
            'wua_id' => $this->faker->randomDigit,
            'river_id' => $this->faker->randomDigit,
            'name_ru' => $this->faker->streetName,
            'name_tj' => $this->faker->streetName,
            'name_en' => $this->faker->streetName,
            'district' => $this->faker->word,
            'region' => $this->faker->word,
            'republic' => $this->faker->country,
            'source' => $this->faker->address,
            'year_of_commissioning' => $this->faker->numberBetween($min = 2010, $max = 2020),
            'material' => $this->faker->streetAddress,
            'bandwidth' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'top_width' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'bottom_width' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'depth' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'length' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'serviced_land' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'water_protection_strips' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = null),
            'number_of_water_outlets' => $this->faker->randomDigit,
            'technical_condition' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'notes' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
        ];
    }
}
