@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('articulos.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescripcion" class="col-sm-2 control-label">Descripcion</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="descripcion" id="inputDescripcion" cols="30" required rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCantidad" class="col-sm-2 control-label">Cantidad</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" name="cantidad" id="inputCantidad" placeholder="Cantidad" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Crear Articulo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection