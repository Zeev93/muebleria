<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'folio' => $this->faker->randomNumber(5),
        'fecha_compra' => $this->faker->dateTime,
        'fecha_entrega' => $this->faker->dateTime,
        'user_id' => 1,
        ];
    }
}
