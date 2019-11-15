@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>NUEVO TIPO DE SOPORTE</legend>
            <br>
            <br>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <form action="{{route('tipoSoporte.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <label for="">TIPO DE SOPORTE</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            
                            
                        </div>
                            <br>
                            <a href="{{route('tipoSoporte.index')}}" class="btn btn-outline-primary">CANCELAR</a>
                            <button type="submit" class="btn btn-primary" >GUARDAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection