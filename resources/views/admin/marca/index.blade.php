@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>MARCA</legend>
            
            <br>
            <a href="{{route('marca.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>MARCA</th>
                        
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marca as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nombre}}</td>
                            
                            <td>
                                {{--  <a href="{{route('area.show',$a->id)}}" class="btn btn-info">VER</a>  --}}
                                <a href="{{route('marca.edit',$m->id)}}" class="btn btn-primary">EDITAR</a>
                                <a href="{{route('marca.destroy',$m->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection