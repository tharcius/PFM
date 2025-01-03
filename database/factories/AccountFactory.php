<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => rand(1, 3),
            'bank_name' => fake()->word(),
            'number' => rand(1120, 999999999999) . '-' . rand(1, 9),
            'agency' => rand(1000, 99999) . '-' . rand(1, 9),
        ];
    }
}
