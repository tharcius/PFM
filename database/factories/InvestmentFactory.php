<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investment>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $month = rand(5,72);
        return [
            'investiment_type' => fake()->name(),
            'initial_value' => rand(1000, 98200),
            'yield' => rand(100, 9800),
            'start_date' => now()->format('Y-m-d'),
            'end_date' => date('d-m-Y', strtotime("+{$month} months"))
        ];
    }
}
