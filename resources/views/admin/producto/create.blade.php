@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>Registrar Nuevo Producto</legend>
            <br>
        </div>
        <div class="card-body">
            <form action="{{route('producto.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Tipo Producto</label>
                        <select name="idTipoProducto" id="idTipoProducto" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($tipoProducto as $tipoProd)
                                <option value="{{$tipoProd->id}}">{{$tipoProd->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        MARCA
                        <select name="idMarca" id="idMarca" class="form-control">
                            <option value="">Marca</option>
                            @foreach ($marca as $marc)
                                <option value="{{$marc->id}}">{{$marc->nombre}}</option>
                            @endforeach
                        </select>
                        {{--  <label for="">Producto</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">  --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        DESCRIPCION
                        <input type="text" name="descripcion" id="descripcion" class="form-control">
                    </div>
                   
                    
                </div>
                <br>
                <a href="{{route('producto.index')}}" class="btn btn-outline-info">Volver</a>
                <button type="submit" class="btn btn-info">Guardar</button>
            </form>
        </div>
    </div>
@endsection