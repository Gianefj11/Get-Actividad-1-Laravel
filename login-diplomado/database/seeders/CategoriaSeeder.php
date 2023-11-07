<?php

namespace Database\Seeders;


use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categorias')->insert([
            'nombre' => 'Hamburgesas',
            'icon' => 'burger-ico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Pizza',
            'icon' => 'pizza-ico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Pepitos',
            'icon' => 'pepitos-ico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Perro Calientes',
            'icon' => 'perros-ico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
    }
}
