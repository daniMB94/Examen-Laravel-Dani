<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *      * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->unique()->text($maxNbChars = 20),
            'creador' => $this->faker->numberBetween(1, 10),
            'descripcion' => $this->faker->unique()->text($maxNbChars = 100),
            'fechaInicio' => $this->faker->dateTimeBetween('+1 week', '+4 week'),
        ];
    }
}