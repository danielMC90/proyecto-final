@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend> ROL</legend>
    </div>
    <div class="card-body">
       
            <div class="row">
                <div class="col-sm-4">
                    <label for="">ROL</label>
                    <input type="text" name="nombre" id="nombre" value="{{$rol->nombre}}" class="form-control" readonly>
                </div>
                
            </div>
            <br>
            <a href="{{route('rol.index')}}" class="btn btn-danger">VOLVER</a>
           
       
    </div>
</div>
    
@endsection