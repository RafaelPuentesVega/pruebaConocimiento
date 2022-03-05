<?php

namespace App\Console\Commands;
use App\Models\Productos;
use Carbon\Carbon;


use Illuminate\Console\Command;

class InsertarProducto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertar:producto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insertar en la BD 1 registro en la tabla producto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $precio = rand(100, 500);
        $product = new Productos();
        $product->nombre_producto = carbon::now();
        $product->descripcion = 'Insert Automatico';
        $product->precio = $precio;
        $product->estado = 1;
        $product->fecha_publicacion = carbon::now();
        $product->save();
    }
}
