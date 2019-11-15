@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>  REGISTRAR PRIVILEGIO</legend>
    </div>
    <div class="card-body">
        <form action="{{route('privilegio.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">DEPARTAMENTO</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                
            </div>
            
            <a href="{{route('privilegio.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection