@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>BAJA DE RECURSOS</legend>
            <br>
            <a href="{{route('bajaRecurso.create')}}" class="btn btn-primary btn-md">NUEVO</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>RECURSO</th>
                        <th>ASUNTO</th>
                        <th>DETALLES</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bajaRecurso as $bajaRec)
                        <tr>
                            <td>{{$bajaRec->id}}</td>
                            <td>{{$bajaRec->recurso->serie}} - {{$bajaRec->recurso->marca->nombre}}</td>
                            <td>{{$bajaRec->asunto}}</td>
                            <td >{{$bajaRec->detalles}}</td>
                            <td>
                                <a href="{{route('bajaRecurso.show',$bajaRec->id)}}" class="btn btn-info">VER</a>
                                <a href="{{route('bajaRecurso.edit',$bajaRec->id)}}" class="btn btn-warning">EDITAR</a>
                                <a href="{{route('bajaRecurso.destroy',$bajaRec->id)}}" class="btn btn-danger">ELIMINAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>


    
@endsection