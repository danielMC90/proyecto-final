@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>VER TIPO DE SOPORTE</legend>
            <br>
            <br>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    
                        <div class="row">
                            <label for="">TIPO DE SOPORTE</label>
                            <input type="text" name="nombre" id="nombre" value="{{$tipoSoporte->nombre}}" readonly class="form-control">
                            
                            
                        </div>
                            <br>
                            <a href="{{route('tipoRecurso.index')}}" class="btn btn-primary">VOLVER</a>
                            
                 
                </div>
            </div>
        </div>
    </div>
@endsection