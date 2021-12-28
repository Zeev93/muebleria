<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = ['Recamaras', 'Salas', 'Comedores', 'Entretenimiento', 'Oficina', 'Iluminación'];

        foreach($categorias as $categoria){
            Categoria::insert([
                'descripcion' => $categoria,
                'slug' => Str::of($categoria)->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
