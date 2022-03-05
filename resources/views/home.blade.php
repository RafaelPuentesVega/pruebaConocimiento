
@extends('layouts.apps')
@section('css')
<title>Home</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css" rel="stylesheet" media="all">

@endsection

@section('content')

         <div class="main-panel">

            <div class="content">
                <div class="container-fluid">

                            <div class="card">

                                    <div class="card "  >
                                        <div class="header" style="background-color: #06419f">

                                            <h3 class="title text-center pull-left" style="color: #ffffff ; padding-bottom :8px;"><strong>PRODUCTOS</strong></h3>
                                            <div class="pull-left" style="vertical-align: top; text-align: right">
                                                <a href="./crear-producto">
                                                <button class="btn btn-warning" style="text-align: center">Crear Producto</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-md-14">

                                                    <form action="{{ route('logout')}}" method="POST" >
                                                        @csrf
                                                        <button class="btn btn-danger">Cerrar Sesion</button>
                                                    </form>

                                                <table  id="products" class="table table-striped table-hover" width="100%" >
                                                    <thead class="thead-light">
                                                    <tr style="background-color: aquamarine" >

                                                            <th scope="col"  class="text-center" ><strong>Nombre Producto</strong></th>
                                                            <th scope="col"   class="text-center" ><strong>Descripcion</strong></th>
                                                            <th scope="col"  class="text-center" ><strong>Precio</strong></th>
                                                            <th scope="col"   class="text-center"><strong>Estado</strong></th>
                                                            <th scope="col"   class="text-center" ><strong>Fecha Publicacion</strong></th>

                                                            <th scope="col" class="text-center" style="color:#16172C"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($productoArray as $item)
                                                        <tr>
                                                            <td width="25%" class="text-center" onclick="consultarProducto({{$item->id_producto}})">{{$item->nombre_producto}}</td>
                                                            <td  width="25%" class="text-center">{{$item->descripcion}}</td>
                                                            <td width="15%" class="text-center">{{$item->precio}}</td>
                                                            @if($item->estado == 0)
                                                            <td width="15%" class="text-center">{{$item->estado}} - Sin Publicar</td>

                                                            @elseif($item->estado == 1)
                                                            <td width="15%" class="text-center">{{$item->estado}} - Publicado</td>
                                                            @else
                                                            <td width="15%" class="text-center">N/A</td>

                                                            @endif
                                                            <td width="15%" class="text-center">{{$item->fecha_publicacion}}</td>
                                                            <td width="20%">


                                                                <form action="{{ route('deleteProducto',$item->id_producto) }}" method="POST" class="pull-left" >
                                                                    @csrf
                                                                    <button title="eliminar Producto" data-toggle="tooltip" data-placement="left" style="border: none; outline:none; text-decoration: none; margin: 0px; margin-bottom: 10px" type="submit" class="btn btn-danger btn-fill  pull-right " id="btneliminarProdcucto" >
                                                                        <i style="color: #ffffff; font-size: 20px; margin: -9px;" class="bi bi-trash-fill box-info pull-left"></i>
                                                                    </button>
                                                                </form>
                                                                <button title="Editar Producto" data-toggle="tooltip" data-placement="left" style="border: none; outline:none; text-decoration: none; margin: 0px; margin-bottom: 10px" type="button" class="btn btn-info btn-fill  pull-right " id="btnEditarProducto" >
                                                                    <i style="color: #ffffff; font-size: 20px; margin: -9px;" class="bi bi-pencil-fill box-info pull-left"></i>
                                                                </button>

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>

                    </div>
            </div>
        </div>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
<script src="/js/home.js"></script>

@endsection


@endsection
