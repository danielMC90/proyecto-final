@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>COMPRAS</legend>
            <br>
            <a href="{{route('compra.create')}}" class="btn btn-info">REGISTRAR COMPRA</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID COMPRA</th>
                        <th>PROVEEDOR</th>
                        <th>FECHA</th>
                        <th>TOTAL</th>
                        <th>DESCRIPCION</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($compra as $com)
                        <tr>
                            <td>{{$com->id}}</td>
                            <td>{{$com->proveedor->razonSocial}}</td>
                            <td>{{$com->fecha}}</td>
                            <td>{{$com->total}}</td>
                            <td>{{$com->detalles}}</td>
                            <td>
                                <a href="{{route('compra.show',$com->id)}}" class="btn btn-info">VER</a>
                            </td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
            {{ $compra->links() }}
        </div>
    </div>

@endsection
