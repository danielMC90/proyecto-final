@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR  NUEVA PERSONA</legend>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <label for="">SOPORTE A:</label>
                <input type="text" name="idPersonal" id="idPersonal" value="{{$actividad->personal->persona->nombres}} {{$actividad->personal->persona->apPaterno}}" readonly class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">ASUNTO</label>
                <input type="text" name="asunto" id="asunto" value="{{$actividad->asunto}}" readonly class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="">FECHA</label>
                <input type="text" name="fecha" id="fecha" value="{{$actividad->fecha}}" readonly class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8">
                <label for="">DETALLES</label>
                <textarea id="detalles" name="detalles" class="form-control form-control-alternative" rows="3" readonly>{{$actividad->detalles}}</textarea>
            </div>
            
        </div>
        

        <a href="{{route('actividad.index')}}" class="btn btn-outline-danger">VOLVER</a>
        
    </div>
</div>
    
@endsection