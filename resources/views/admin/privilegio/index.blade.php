@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>PRIVILEGIOS</legend>
            
            <br>
            <a href="{{route('privilegio.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>DEPARTAMENTO</th>
                        
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($privilegio as $privi)
                        <tr>
                            <td>{{$privi->id}}</td>
                            <td>{{$privi->nombre}}</td>
                            
                            <td>
                                <a href="{{route('privilegio.show',$privi->id)}}" class="btn btn-info">VER</a>
                                <a href="{{route('privilegio.edit',$privi->id)}}" class="btn btn-warning">EDITAR</a>
                                <a href="{{route('privilegio.destroy',$privi->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection