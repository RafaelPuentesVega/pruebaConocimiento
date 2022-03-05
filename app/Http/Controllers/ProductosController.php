<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        


    }
    public function index()
    {
        $productoArray = Productos::all();
        return view('home')->with('productoArray',$productoArray);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.crearProducto');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Productos();
        $product->nombre_producto = $request->nombre_producto;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->estado = $request->estado;
        $product->fecha_publicacion = carbon::now();
        $product->save();
        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $productoArray=Productos::where('id_producto', '=', $request->id)->get()->toArray();
        $productoArray = $productoArray[0];
        $response = Array('mensaje' => 'ok' );
        $response['dataProducto'] =$productoArray;
        return json_encode($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Productos::whereid_producto($id);
        $product->delete();
        return redirect('home')->with('status', 'El Producto  Ha sido eliminado');

    }
}
