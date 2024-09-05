<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatosSeeder extends Seeder
{
    public function run()
    {
        DB::table('platos')->insert([
            [
                'nombre' => 'Ensalada César',
                'descripcion' => 'Ensalada de lechuga romana, pollo a la parrilla, crutones y aderezo César.',
                'precio' => 25.50,
                'cantidad' => 20,
                'categoria' => 'Ensaladas',
            ],
            [
                'nombre' => 'Sopa de Tomate',
                'descripcion' => 'Sopa de tomate fresco con albahaca y crema.',
                'precio' => 18.00,
                'cantidad' => 30,
                'categoria' => 'Sopas',
            ],
            [
                'nombre' => 'Pizza Margherita',
                'descripcion' => 'Pizza con salsa de tomate, mozzarella y albahaca fresca.',
                'precio' => 45.00,
                'cantidad' => 15,
                'categoria' => 'Pizzas',
            ],
            [
                'nombre' => 'Lasagna de Carne',
                'descripcion' => 'Capas de pasta con carne molida, salsa de tomate y queso.',
                'precio' => 50.00,
                'cantidad' => 10,
                'categoria' => 'Pastas',
            ],
            [
                'nombre' => 'Hamburguesa Vegetariana',
                'descripcion' => 'Hamburguesa a base de vegetales con lechuga, tomate y mayonesa vegana.',
                'precio' => 35.00,
                'cantidad' => 25,
                'categoria' => 'Hamburguesas',
            ],
            [
                'nombre' => 'Tacos de Pollo',
                'descripcion' => 'Tacos suaves rellenos de pollo sazonado con guacamole y pico de gallo.',
                'precio' => 30.00,
                'cantidad' => 12,
                'categoria' => 'Tacos',
            ]
        ]);
    }
}
