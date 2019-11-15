@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>PERSONAL</legend>
            <br>
            <a href="{{route('personal.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>NOMBRE Y APELLIDO</th>
                        <th>AREA</th>
                        <th>PUESTO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personal as $per)
                        <tr>
                            <td>{{$per->id}}</td>
                            <td>{{$per->persona->nombres}} {{$per->persona->apPaterno}}</td>
                            <td>{{$per->area->nombre}}</td>
                            <td >{{$per->puesto}}</td>
                            <td>
                                <a href="{{route('personal.show',$per->id)}}" class="btn btn-info">VER</a>
                                <a href="{{route('personal.edit',$per->id)}}" class="btn btn-warning">EDITAR</a>
                                <a href="{{route('personal.destroy',$per->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>


    
@endsection