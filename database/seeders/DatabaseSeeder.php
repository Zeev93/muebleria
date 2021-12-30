<?php

namespace Database\Seeders;

use App\Models\DetalleCompra;
use App\Models\OrdenCompra;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaSeeder::class,
            UserSeeder::class,
        ]);

        Producto::factory(10)->create();
        OrdenCompra::factory(10)->create();
        DetalleCompra::factory(10)->create();

    }
}
