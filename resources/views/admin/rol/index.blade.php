@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>ROLES</legend>
            
            <br>
            <a href="{{route('rol.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>ROL</th>
                        
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rol as $ro)
                        <tr>
                            <td>{{$ro->id}}</td>
                            <td>{{$ro->nombre}}</td>
                            
                            <td>
                                <a href="{{route('rol.show',$ro->id)}}" class="btn btn-info">VER</a>
                                <a href="{{route('rol.edit',$ro->id)}}" class="btn btn-warning">EDITAR</a>
                                <a href="{{route('rol.destroy',$ro->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection