@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
                <legend>PERSONA</legend>
                <br>
            <a href="{{route('persona.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>NOMBRE Y APELLIDO</th>
                        <th>CI</th>
                       
                        <th>TELEFONO</th>
                       
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persona as $per)
                        <tr>
                            <td>{{$per->id}}</td>
                            <td>{{$per->nombres}} {{$per->apPaterno}} {{$per->apMaterno}}</td>
                            <td>{{$per->ci}}</td>
                            
                            <td>{{$per->telefono}}</td>
                            
                            <td>
                                <a href="{{route('persona.show',$per->id)}}" class="btn btn-primary">VER</a>
                                <a href="{{route('persona.edit',$per->id)}}" class="btn btn-info">EDITAR</a>
                                <a href="{{route('persona.destroy',$per->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection