<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\TpsCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_id' => Address::inRandomOrder()->first()->id,
            'tps_coordinate_id' => TpsCoordinate::inRandomOrder()->first()->id,
            'nik' => $this->faker->randomNumber(8) . $this->faker->randomNumber(8),
            'nkk' => str_pad($this->faker->randomNumber(8), 16, '0', STR_PAD_LEFT),
            'volunteer_name' => $this->faker->name,
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone' => $this->faker->phoneNumber,
            'source' => $this->faker->word,
            'flag' => $this->faker->word,
            'coordinator' => $this->faker->name,
            'is_agree' => $this->faker->boolean
        ];
    }
}
