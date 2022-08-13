<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dummayDate = $this->faker->dateTimeThisMonth;

        return [
            'name' => $this->faker->name,
            'information' => $this->faker->realText,
            'max_people' => $this->faker->numberBetween(1,20),
            'start_date' => $dummayDate->format('Y-m-d H:i:s'),
            'end_date' => $dummayDate->modify('+1hour')->format('Y-m-d H:i:s'),
            'is_visible' => $this->faker->boolean
        ];
    }
}
