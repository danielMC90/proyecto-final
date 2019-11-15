@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>EDITAR MARCA</legend>
    </div>
    <div class="card-body">
        <form action="{{route('marca.update',$marca->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">MARCA</label>
                    <input type="text" name="nombre" id="nombre" value="{{$marca->nombre}}" class="form-control">
                    <br>
                </div>
                
            </div>
            
            <a href="{{route('marca.index')}}" class="btn btn-outline-primary">CANCELAR</a>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>
</div>
    
@endsection