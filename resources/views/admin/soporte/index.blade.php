@extends('plantilla')
@section('contenido')
    <div class="card-header">
        <legend>SOPORTE</legend>
        <br>
        <a href="{{route('soporte.create')}}" class="btn btn-info"> NUEVO</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TIPO DE SOPORTE</th>
                    <th>A QUIEN:</th>
                    <th>FECHA</th>
                    <th>ASUNTO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soporte as $sopor)
                    <tr>
                        <td>{{$sopor->id}}</td>
                        <td>{{$sopor->tipoSoporte->nombre}}</td>
                        <td>{{$sopor->personal->persona->nombres}}</td>
                        <td>{{$sopor->fecha}}</td>
                        <td>{{$sopor->asunto}}</td>
                        <td>
                        <a href="{{route('soporte.edit',$sopor->id)}}" class="btn btn-info">EDITAR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
