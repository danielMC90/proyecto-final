@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>AREA</legend>
            
            <br>
            <a href="{{route('area.create')}}" class="btn btn-primary btn-md">NUEVO</a>
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
                    @foreach ($area as $a)
                        <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->nombre}}</td>
                            
                            <td>
                                {{--  <a href="{{route('area.show',$a->id)}}" class="btn btn-info">VER</a>  --}}
                                <a href="{{route('area.edit',$a->id)}}" class="btn btn-primary">EDITAR</a>
                                <a href="{{route('area.destroy',$a->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection