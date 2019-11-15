@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>DETALLES</legend>
    </div>
    <div class="card-body">
        
            <div class="row">
                <div class="col-sm-4">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombres" id="nombres" value="{{$personal->persona->nombres}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">AP. PATERNO</label>
                    <input type="text" name="apPaterno" id="apPaterno" value="{{$personal->persona->apPaterno}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">AP. MATERNO</label>
                    <input type="text" name="apMaterno" id="apMaterno"  value="{{$personal->persona->apMaterno}}" class="form-control" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">AREA</label>
                    <input type="text" name="area" id="area" value="{{$personal->area->nombre}}" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="">PUESTO</label>
                    <input type="text" name="puesto" id="puesto"  value="{{$personal->puesto}}" class="form-control" readonly>
                    <br>
                </div>
               
              
                
            </div>

            <a href="{{route('personal.index')}}" class="btn btn-outline-primary">VOLVER</a>
         
     
    </div>
</div>
    
@endsection