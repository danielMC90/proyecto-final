@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend class="text-center">COMPRA</legend>
    </div>
    <div class="card-body">
        {{--  inicia form  --}}
        <form action="{{route('compra.store')}}" method="post">
            <div class="row">
                @csrf
                <div class="col-md-4">
                    PROVEEDOR
                    <select name="idProveedor" id="idProveedor" class="form-control" required>
                        <option value="">seleccione</option>
                        @foreach ($proveedor as $prov)
                            <option value="{{$prov->id}}">{{$prov->razonSocial}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    FECHA
                    <input type="date" name="fecha" id="fecha" value="<?php echo date("Y-n-j"); ?>" class="form-control">
                    <br>
                </div>

                <div class="col-md-4">
                    DESCRIPCION
                    <input type="text" name="detalles" id="detalles" class="form-control" required>
                </div>
            </div>

            <div class="row">
                @include('admin.compra.fragment.formbuscarproducto')
            </div>

            <div class="row" id="compra-productosencontrados">
                @include('admin.compra.resultadobusqueda')
            </div>

            <div class="row" id="detalle-compra">
                @include('admin.compra.fragment.detallecompra')
            </div>

            <div class="row" id="botones">
                <div class="col-4">
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">GUARDAR</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection



