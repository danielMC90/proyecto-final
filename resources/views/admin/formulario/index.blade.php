@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>Formulario</legend>
            <br>
            <a href="{{route('formulario.create')}}" class="btn btn-info">Registrar</a>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Razon Social</th>
                            <th>Producto vendido</th>
                            <th>cantidad</th>
                            <th>total</th>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulario as $form)
                        <tr>
                            <th>{{$form->id}}</th>
                            <th>{{$form->razonSocial}}</th>
                            <th>{{$form->producto->nombre}}</th>
                            <th>{{$form->cantidad}}</th>
                            <th>{{$form->subtotal}}</th>
                            <th>opciones</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection