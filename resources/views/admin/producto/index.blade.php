@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>Lista de Productos</legend>
            <br>
            <a href="{{route('producto.create')}}" class="btn btn-info">Agregar Producto</a>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DESCRIPCION</th>
                            <th>Tipo de Producto</th>
                            <th>Marca</th>
                           
                            <th>Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($producto as $prod)
                        <tr>
                            <th>{{$prod->id}}</th>
                            <th>{{$prod->descripcion}}</th>
                            <th>{{$prod->tipoProducto->nombre}}</th>
                            <th>{{$prod->marca->nombre}}</th>
                            
                            <th>
                                    <a href="{{route('producto.show',$prod->id)}}" class="btn btn-success">ver</a>
                                <a href="{{route('producto.edit',$prod->id)}}" class="btn btn-info">Editar</a>
                                <a href="{{route('producto.destroy',$prod->id)}}" class="btn btn-danger">Eliminar</a>
                            </th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection