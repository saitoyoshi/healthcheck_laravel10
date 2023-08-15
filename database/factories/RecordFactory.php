<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'physical_condition' => fake()->numberBetween(1,5),
            'mood_state' => fake()->numberBetween(1,5),
            'back_pain' => fake()->numberBetween(1,5),
            'eyestrain' => fake()->numberBetween(1,5),
            'headache' => fake()->numberBetween(1,5),
            'recording_date' => fake()->date(),
        ];
    }
}
