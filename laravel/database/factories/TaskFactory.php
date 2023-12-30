<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(1),
            "description" => $this->faker->sentence(3),
            "long_description" => $this->faker->paragraph(2),
            "completed" => $this->faker->boolean(50),
        ];
    }
}
