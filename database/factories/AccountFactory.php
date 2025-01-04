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
        $type = rand(1, 3);

        return [
            'type' => $type,
            'bank_name' => $type == 1 ? null : fake()->word(),
            'number' => $type == 1 ? null :rand(1120, 999999999999) . '-' . rand(1, 9),
            'agency' => $type == 1 ? null :rand(1000, 99999) . '-' . rand(1, 9),
        ];
    }
}
