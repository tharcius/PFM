<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $day = rand(-45,45);

        return [
            'amount' => rand(100, 100000),
            'date' => date('d-m-Y', strtotime("+{$day} days")),
            'type' => rand(1, 3),
            'description' => fake()->realText(50, 1)
        ];
    }
}
