@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend> PRIVILEGIO - SHOW</legend>
    </div>
    <div class="card-body">
       
            <div class="row">
                <div class="col-sm-4">
                    <label for="">PRIVILEGIO</label>
                    <input type="text" name="nombre" id="nombre" value="{{$privilegio->nombre}}" class="form-control" readonly>
                </div>
                
            </div>
            <br>
            <a href="{{route('privilegio.index')}}" class="btn btn-danger">VOLVER</a>
           
       
    </div>
</div>
    
@endsection