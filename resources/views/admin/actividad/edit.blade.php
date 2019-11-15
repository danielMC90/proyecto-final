@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>EDITAR ACTIVIDAD</legend>
    </div>
    <div class="card-body">
        <form action="{{route('actividad.update',$actividad->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <label for="">SOPORTE A: </label>
                    <select name="idPersonal" id="idPersonal" class="form-control">
                        <option value="{{$actividad->id}}">{{$actividad->personal->persona->nombres}} {{$actividad->personal->persona->apPaterno}}</option>
                        @foreach ($personal as $perso)
                            <option value="{{$perso->id}}">{{$perso->persona->nombres}} {{$perso->persona->apPaterno}} </option>
                        @endforeach
                   </select>
                </div>
                <div class="col-sm-4">
                    <label for="">ASUNTO</label>
                    <input type="text" name="asunto" id="asunto" value="{{$actividad->asunto}}" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">DETALLES</label>
                    <textarea id="detalles" name="detalles" class="form-control form-control-alternative" rows="3" >{{$actividad->detalles}}</textarea>
                </div>
                
            </div>
            

            <a href="{{route('actividad.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">ACTUALIZAR</button>
        </form>
    </div>
</div>
    
@endsection