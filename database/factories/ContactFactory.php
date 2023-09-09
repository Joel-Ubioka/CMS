<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          
          'name' => fake()->sentence(3),
            'email' => fake()->unique()->safeEmail(),
            'subject' => fake()->paragraph(4),
          'message' => fake()->paragraph(4)
        ];
    }
}