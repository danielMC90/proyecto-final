@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>Editar Tipo de Producto</legend>
    </div>
    <div class="card-body">
        <form action="{{route('tipoProducto.update',$area->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Tipo de Producto</label>
                    <input type="text" name="nombre" id="nombre" value="{{'tipoProducto->nombre'}}" class="form-control" required>
                </div>
                <div class="col-sm-4">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" value="{{'tipoProducto->descripcion'}}" class="form-control" required>
                </div>
                
            </div>
            
            <a href="{{route('tipoProducto.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">ACTUALIZAR</button>
        </form>
    </div>
</div>
    
@endsection