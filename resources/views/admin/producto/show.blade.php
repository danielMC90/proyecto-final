@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>Editar Producto</legend>
            <br>
        </div>
        <div class="card-body">
           
                <div class="row">
                    <div class="col-md-4">
                        TIPO DE PRODUCTO
                        <input type="text" name="idTipoProducto" id="idTipoProducto" value="{{$producto->tipoProducto->nombre}}" readonly class="form-control">
                          
                    </div>
                    <div class="col-md-4">
                        MARCA
                        <input type="text" name="idMarca" id="idMarca" value="{{$producto->marca->nombre}}" readonly class="form-control">
                           <br>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        DESCRIPCION
                        <input type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}" readonly class="form-control">
                    </div>
                   
                    
                </div>
                <br>
                <a href="{{route('producto.index')}}" class="btn btn-info">Volver</a>
           
        </div>
    </div>
@endsection