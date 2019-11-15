@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>ACTIVIDADES DIARIAS</legend>
            <a href="{{route('actividad.create')}}" class="btn btn-info">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Nº</th>
                        {{--  <th>SOPORTE A</th>  --}}
                        <th>ASUNTO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actividad as $acti)
                        <tr>
                            <td>{{$acti->id}}</td>
                            {{--  <td>{{$acti->personal->persona->nombres}} {{$acti->personal->persona->apPaterno}}</td>  --}}
                            <td>{{$acti->asunto}}</td>
                            <td>
                                <a href="{{route('actividad.show',$acti->id)}}" class="btn btn-primary">VER</a>
                                <a href="{{route('actividad.edit',$acti->id)}}" class="btn btn-success">EDITAR</a>
                                <a href="{{route('actividad.destroy',$acti->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
