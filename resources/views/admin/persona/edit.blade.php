@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR  NUEVA PERSONA</legend>
    </div>
    <div class="card-body">
        <form action="{{route('persona.update',$persona->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombres" id="nombres" value="{{$persona->nombres}}" class="form-control">
                    @if ($errors->has('nombres'))
                        <small class="form-text text-danger">{{$errors->first('nombres')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">AP. PATERNO</label>
                    <input type="text" name="apPaterno" id="apPaterno" value="{{$persona->apPaterno}}" class="form-control">
                    @if ($errors->has('apPaterno'))
                        <small class="form-text text-danger">{{$errors->first('apPaterno')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">AP. MATERNO</label>
                    <input type="text" name="apMaterno" id="apMaterno"  value="{{$persona->apMaterno}}" class="form-control">
                    @if ($errors->has('apMaterno'))
                        <small class="form-text text-danger">{{$errors->first('apMaterno')}}</small>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">CI</label>
                    <input type="text" name="ci" id="ci"  value="{{$persona->ci}}" class="form-control">
                    @if ($errors->has('ci'))
                        <small class="form-text text-danger">{{$errors->first('ci')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">GENERO</label>
                    <input type="text" name="genero" id="genero" value="{{$persona->genero}}" class="form-control">
                   
                </div>
                <div class="col-sm-4">
                    <label for="">TELEFONO</label>
                    <input type="text" name="telefono" id="telefono" value="{{$persona->telefono}}" class="form-control">
                    @if ($errors->has('telefono'))
                        <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">DIRECCION</label>
                    <input type="text" name="direccion" id="direccion" value="{{$persona->direccion}}" class="form-control">
                    @if ($errors->has('direccion'))
                        <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">CORREO</label>
                    <input type="text" name="correo" id="correo" value="{{$persona->correo}}" class="form-control">
                    @if ($errors->has('correo'))
                        <small class="form-text text-danger">{{$errors->first('correo')}}</small>
                    @endif
                    <br>
                </div>
                
            </div>

            <a href="{{route('persona.index')}}" class="btn btn-outline-primary">CANCELAR</a>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection