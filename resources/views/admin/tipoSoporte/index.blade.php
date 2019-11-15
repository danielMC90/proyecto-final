@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>TIPO DE SOPORTE</legend>
            <br>
            <a href="" class="btn btn-info">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>TIPO DE SOPORTE</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipoSoporte as $tipoSo)
                        <tr>
                            <td>{{$tipoSo->id}}</td>
                            <td>{{$tipoSo->nombre}}</td>
                            <td>
                                <a href="{{route('tipoSoporte.edit',$tipoSo->id)}}" class="btn btn-primary">EDITAR</a>
                                <a href="{{route('tipoSoporte.destroy',$tipoSo->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection