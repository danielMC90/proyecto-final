@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend> MARCA</legend>
    </div>
    <div class="card-body">
       
            <div class="row">
                <div class="col-sm-4">
                    <label for="">DEPARTAMENTO</label>
                    <input type="text" name="nombre" id="nombre" value="{{$marca->nombre}}" class="form-control" readonly>
                </div>
                
            </div>
            <br>
            <a href="{{route('marca.index')}}" class="btn btn-primary">VOLVER</a>
           
       
    </div>
</div>
    
@endsection