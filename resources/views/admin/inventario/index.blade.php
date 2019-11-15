@extends('plantilla')
@section('contenido')
<div class="card">
        <div class="card-header">
            <legend>INVENTARIO</legend>
            {{-- <a href="{{route('actividad.create')}}" class="btn btn-info">NUEVO</a> --}}
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>TIPO DE PRODUCTO</th>
                        <th>PRODUCTO</th>
                        <th>MARCA</th>
                        <th>SERIE</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventario as $inventa)
                        <tr>
                            <td>{{$inventa->id}}</td>
                            <td>{{$inventa->producto->tipoProducto->nombre}}</td>
                            <td>{{$inventa->producto->descripcion}} </td>
                            <td>{{$inventa->producto->marca->nombre}}</b></td>
                            <td>{{$inventa->serie}}</td>
                           
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection