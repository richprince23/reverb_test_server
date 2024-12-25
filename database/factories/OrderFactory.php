<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $stat = fake()->randomElement(['pending', 'accepted', 'paid', 'delivered']);

        return [
            'status' => $stat,
            'user_id' => fake()->randomNumber(1),
            'comment' => fake()->text(),
            'total' => fake()->randomNumber(2),
        ];
    }
}
