@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>USUARIOS</legend>
            <a href="{{route('usuario.create')}}">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>PERSONA</th>
                        <th>CONTRASEÑA</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuario as $us)
                    <tr>
                        <td>{{$us->id}}</td>
                        <td>{{$us->persona->nombres}}</td>
                        <td>{{$us->contrasenha}}</td>
                        <td>
                            <a href="{{route('usuario.show',$us->id)}}" class="btn btn-info btn-sm">VER</a>
                            <a href="{{route('usuario.edit',$us->id)}}" class="btn btn-success btn-sm">EDITAR</a>
                            <a href="{{route('usuario.destroy',$us->id)}}" class="btn btn-danger btn-sm">ELIMINAR</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection