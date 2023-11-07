<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'name' => 'Hamburgesa de pollo crispy',
                'cantidad' => 20,
                'precio' => 7.5,
                'imagen' => 'Hamburgesa de pollo',
                'status' => true,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Hamburgesa de carne',
                'cantidad' => 10,
                'precio' => 6.5,
                'imagen' => 'Hamburgesa de carne',   
                'status' => true,             
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Hamburgesa de chuleta',
                    'cantidad' => 10,
                    'precio' => 8.5,
                    'imagen' => 'Hamburgesa de chuleta',
                    'status' => false,
                    'categoria_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Pizza de Peperonni',
                    'cantidad' => 18,
                    'precio' => 10,
                    'imagen' => 'Pizza_Peperonni',
                    'status' => true,
                    'categoria_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Pizza Vegetariana',
                    'cantidad' => 15,
                    'precio' => 12,
                    'imagen' => 'Pizza_Vegetariana',
                    'status' => true,
                    'categoria_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Pizza Jamon y Queso',
                    'cantidad' => 12,
                    'precio' => 6,
                    'imagen' => 'Pizza_Jamon_Queso',
                    'status' => true,
                    'categoria_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Doritos',
                    'cantidad' => 35,
                    'precio' => 3.0,
                    'imagen' => 'Doritos',
                    'status' => true,
                    'categoria_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            array(
                    'name' => 'Chees Strees',
                    'cantidad' => 15,
                    'precio' => 3.5,
                    'imagen' => 'Chees_Strees',
                    'status' => true,
                    'categoria_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                )
        ] ;
        DB::table('productos')->insert($data);
    }
}
