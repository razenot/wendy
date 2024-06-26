<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guests>
 */
class GuestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('ru_RU')->firstName(),
            'surname' => fake('ru_RU')->lastName(),
            'child' => fake()->boolean(),
            'invite' => fake()->boolean(),
        ];
    }
}
