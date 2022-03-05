@extends('layouts.apps')
@section('css')
<title>Crear Producto</title>

@endsection

@section('content')

<div class="main-panel">

    <div class="content">


        <div class="container-fluid">

            <div class="row ">
                <div class="col-md-15">


                        <div class="card ">


                            <div class="card "  >
                                <div class="header" style="background-color: #06419f">

                                    <h3 class="title text-center pull-left" style="color: #ffffff ; padding-bottom :8px;"><strong>CREAR PRODUCTOS</strong></h3>

                                </div>
                            </div>

                            <div class="content">
                                <br>
                                <form action="{{ route('crearProducto')}}" method="POST" >
                                    @csrf
                                    <div class="row" required>

                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NOMBRE</label>
                                                <input type="text" class="form-control" name="nombre_producto"
                                                    id="nombre_producto" placeholder="Nombre Producto" required
                                                    autocomplete="off"
                                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>DESCRIPCION</label>
                                                <input type="text" class="form-control" name="descripcion"
                                                    id="descripcion" placeholder="Descripcion" required
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">


                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PRECIO</label>
                                                <input type="number" maxlength="6" class="form-control"
                                                    name="precio" id="precio" placeholder="Precio"
                                                    required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">ESTADO</label>
                                                <select class="js-example-basic js-states form-control"
                                                    name="estado" required
                                                    id="estado" autocomplete="off">
                                                    <option value="">Seleccionar..</option>
                                                    <option value="0">SIN PUBLICAR</option>
                                                    <option value="1">PUBLICADO</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <br>
                                                <button title="GUARDAR"
                                                style="text-align: center"
                                                type="submit" class="btn btn-success btn-fill  btn-round pull-right "
                                                id="btnGuardarCliente" >Guardar
                                            </button>

                                            </div>
                                        </div>


                                    </div>


                                </form>
                                </div>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
