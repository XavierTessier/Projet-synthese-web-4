<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
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
            'ville' => $this->faker->name(),
            'emplacement_id' => $this->faker->numberBetween(1,9),
            'description' => $this->faker->text(),
            'prix' => $this->faker->numberBetween(1,100),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
