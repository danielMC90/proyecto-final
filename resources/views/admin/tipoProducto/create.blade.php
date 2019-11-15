@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REgistrar Nuevo Tipo de Producto </legend>
    </div>
    <div class="card-body">
        <form action="{{route('tipoProducto.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Tipo de Producto</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="col-sm-4">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                </div>
                
            </div>
            
            <a href="{{route('tipoProducto.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection