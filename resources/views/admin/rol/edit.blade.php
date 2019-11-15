@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>EDITAR ROL </legend>
    </div>
    <div class="card-body">
        <form action="{{route('rol.update',$rol->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">ROL</label>
                    <input type="text" name="nombre" id="nombre" value="{{$rol->nombre}}" class="form-control">
                </div>
                
            </div>
            
            <a href="{{route('rol.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">ACTUALIZAR</button>
        </form>
    </div>
</div>
    
@endsection