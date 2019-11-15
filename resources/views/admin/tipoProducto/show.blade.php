@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>Tipo de Producto</legend>
    </div>
    <div class="card-body">
        <form action="{{route('tipoProducto.update',$area->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Tipo de Producto</label>
                    <input type="text" name="nombre" id="nombre" value="{{'tipoProducto->nombre'}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" value="{{'tipoProducto->descripcion'}}" class="form-control" readonly>
                </div>
                
            </div>
            
            <a href="{{route('tipoProducto.index')}}" class="btn btn-outline-danger">VOLVER</a>
            
        </form>
    </div>
</div>
    
@endsection