@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <h4>DETALLE DE COMPRA</h4>
            <p><b>PROVEEDOR: </b>{{$compra->proveedor->razonSocial}}</p>
            <p><b>FECHA: </b>{{$compra->fecha}}</p>

            <p><b>DESCRIPCION: </b>{{$compra->detalles}}</p>
            <p><b>TOTAL: </b>{{$compra->total}}</p>

        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalleCompra as $detalle)
                        <tr>
                            <td>{{$detalle->producto->descripcion}}</td>
                            <td>{{$detalle->precioUnitario}}</td>
                            <td>{{$detalle->cantidad}}</td>
                            <td>{{$detalle->subtotal}}</td>
                        </tr>

                    @endforeach
                    <tr>
                            <td colspan="2"></td>
                            <td>TOTAL</td>
                            <td>{{$compra->total}}</td>
                        </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
