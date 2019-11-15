@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR  NUEVA MARCA</legend>
    </div>
    <div class="card-body">
        <form action="{{route('marca.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">MARCA</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    @if ($errors->has('nombre'))
                        <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                    @endif
                    <br>
                    
                </div>
                
            </div>
            
            <a href="{{route('marca.index')}}" class="btn btn-outline-primary">CANCELAR</a>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection