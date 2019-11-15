@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>DETALLES</legend>
    </div>
    <div class="card-body">
        
            <div class="row">
                <div class="col-sm-4">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombres" id="nombres" value="{{$persona->nombres}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">AP. PATERNO</label>
                    <input type="text" name="apPaterno" id="apPaterno" value="{{$persona->apPaterno}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">AP. MATERNO</label>
                    <input type="text" name="apMaterno" id="apMaterno"  value="{{$persona->apMaterno}}" class="form-control" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">CI</label>
                    <input type="text" name="ci" id="ci"  value="{{$persona->ci}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">GENERO</label>
                    <input type="text" name="genero" id="genero" value="{{$persona->genero}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">TELEFONO</label>
                    <input type="text" name="telefono" id="telefono" value="{{$persona->telefono}}" class="form-control" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">DIRECCION</label>
                    <input type="text" name="direccion" id="direccion" value="{{$persona->direccion}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">CORREO</label>
                    <input type="text" name="correo" id="correo" value="{{$persona->correo}}" class="form-control" readonly>
                    <br>
                </div>
                
            </div>

            <a href="{{route('persona.index')}}" class="btn btn-outline-primary">VOLVER</a>
         
     
    </div>
</div>
    
@endsection