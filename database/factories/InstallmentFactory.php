<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Installment>
 */
class InstallmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'installment_number' => rand(2, 12),
            'installment_amoaunt' => rand(1, 1200),
            'payment_date' => now()->format('Y-m-d')
        ];
    }
}
