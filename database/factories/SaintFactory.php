<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // creazione dati random da documentazione
            'nome' => fake()->firstName(),
            'luogo_nascita' => fake()->address(),
            'data_benedizione' => fake()->date(),
            'numero_miracoli' => fake()->numberBetween(1, 15),
        ];
    }
}