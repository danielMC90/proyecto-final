@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>AREA</legend>
            
            <br>
            <a href="{{route('tipoProducto.create')}}" class="btn btn-primary btn-md">Agregar</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                       
                        <th>Tipos de Productos</th>
                        
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipoProducto as $tipo)
                        <tr>
                            
                            <td>{{$tipo->nombre}}</td>
                            
                            <td>
                                {{-- <a href="{{route('tipoProducto.show',$tipo->id)}}" class="btn btn-info">VER</a> --}}
                                <a href="{{route('tipoProducto.edit',$tipo->id)}}" class="btn btn-warning">EDITAR</a>
                                <a href="{{route('tipoProducto.destroy',$tipo->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection