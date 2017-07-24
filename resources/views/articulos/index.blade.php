@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articulos as $articulo)
                            <tr>
                                <td>{{ $articulo->id }}</td>
                                <td>{{ $articulo->nombre }}</td>
                                <td>{{ $articulo->descripcion }}</td>
                                <td>{{ $articulo->cantidad }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('articulos.destroy', $articulo->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection