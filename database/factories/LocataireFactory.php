<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LocataireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>fake()->name(),
            "telephone"=>fake()->unique()->e164PhoneNumber(),
            "login"=>fake()->unique()->firstName(),
            "mot_de_passe"=>fake()->word(1, true),

        ];
    }
}
