@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR  NUEVA PERSONA</legend>
    </div>
    <div class="card-body">
        <form action="{{route('persona.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombres" id="nombres" class="form-control">
                    @if ($errors->has('nombres'))
                        <small class="form-text text-danger">{{$errors->first('nombres')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">AP. PATERNO</label>
                    <input type="text" name="apPaterno" id="apPaterno" class="form-control">
                    @if ($errors->has('apPaterno'))
                        <small class="form-text text-danger">{{$errors->first('apPaterno')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">AP. MATERNO</label>
                    <input type="text" name="apMaterno" id="apMaterno" class="form-control">
                    @if ($errors->has('apMaterno'))
                        <small class="form-text text-danger">{{$errors->first('apMaterno')}}</small>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">CI</label>
                    <input type="text" name="ci" id="ci" class="form-control">
                    @if ($errors->has('ci'))
                        <small class="form-text text-danger">{{$errors->first('ci')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">GENERO</label>
                    <select name="genero" id="genero" class="form-control">
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="">TELEFONO</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    @if ($errors->has('telefono'))
                        <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">DIRECCION</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                    @if ($errors->has('direccion'))
                        <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">CORREO</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                </div>
                
            </div>

            <a href="{{route('persona.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection