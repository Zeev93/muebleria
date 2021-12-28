<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => Str::random(10),
            'descripcion' => Str::random(20),
            'precio_compra' => $this->faker->randomFloat(2, 0, 1000),
            'precio_venta' => $this->faker->randomFloat(2, 0, 1200),
            'descuento' => $this->faker->randomFloat(2, 0, 1),
            'categoria_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}
