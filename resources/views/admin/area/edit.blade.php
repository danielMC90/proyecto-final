@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>EDITAR DEPARTAMENTO</legend>
    </div>
    <div class="card-body">
        <form action="{{route('area.update',$area->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">DEPARTAMENTO</label>
                    <input type="text" name="nombre" id="nombre" value="{{$area->nombre}}" class="form-control">
                    @if ($errors->has('nombre'))
                        <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                    @endif
                    <br>
                    
                </div>
                
            </div>
            
            <a href="{{route('area.index')}}" class="btn btn-outline-primary">CANCELAR</a>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>
</div>
    
@endsection