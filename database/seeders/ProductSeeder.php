<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->truncate();
        DB::table('producto')->insert([
            'nombre_producto' => 'Computador',
            'descripcion' => 'portatil I7 - RAM 8gb',
            'precio' => '50000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Impresora',
            'descripcion' => 'Epson l200',
            'precio' => '45245',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Monitor',
            'descripcion' => 'Pantalla 22" - LED ',
            'precio' => '45678',
            'estado' => '0',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'UPS',
            'descripcion' => 'kva 1200 - 5 Puertos',
            'precio' => '54265',
            'estado' => '0',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Fotocopiadora',
            'descripcion' => 'RICOH 4500',
            'precio' => '23000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);


        DB::table('producto')->insert([
            'nombre_producto' => 'Teclado',
            'descripcion' => 'Marca Genius - español',
            'precio' => '18000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Cable',
            'descripcion' => 'cable VGA',
            'precio' => '6500',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Disco duro',
            'descripcion' => 'SDD 480 Gb - ADATA',
            'precio' => '25000',
            'estado' => '0',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'PC',
            'descripcion' => 'Portatil Rizen 5',
            'precio' => '12000',
            'estado' => '0',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'TV',
            'descripcion' => 'Samsung 55"',
            'precio' => '250000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'MAC',
            'descripcion' => 'MacPro 4512 "',
            'precio' => '255000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);
        DB::table('producto')->insert([
            'nombre_producto' => 'Celular',
            'descripcion' => 'Xiaomi 9S"',
            'precio' => '160000',
            'estado' => '1',
            'fecha_publicacion' =>  carbon::now(),

        ]);

    }
}
