<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MrcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
