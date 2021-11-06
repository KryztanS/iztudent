<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'contact_number' => $this->faker->randomNumber(9, true),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
        ];
    }
}
