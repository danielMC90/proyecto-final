@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR  NUEVO PERSONAL</legend>
    </div>
    <div class="card-body">
        <form action="{{route('personal.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">NOMBRE</label>
                    <select name="idPersona" id="idPersona" class="form-control">
                        <option value="">seleccione persona</option>
                        @foreach ($persona as $perso)
                            <option value="{{$perso->id}}">{{$perso->nombres}} {{$perso->apPaterno}} </option>
                        @endforeach
                   </select>
                   @if ($errors->has('idPersona'))
                        <small class="form-text text-danger">{{$errors->first('idPersona')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">AREA</label>
                    <select name="idArea" id="idArea" class="form-control">
                        <option value="">seleccione persona</option>
                        @foreach ($area as $a)
                            <option value="{{$a->id}}">{{$a->nombre}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('idArea'))
                        <small class="form-text text-danger">{{$errors->first('idArea')}}</small>
                    @endif
                </div>
                <div class="col-sm-4">
                    <label for="">PUESTO</label>
                    <input type="text" name="puesto" id="puesto" class="form-control">
                    @if ($errors->has('puesto'))
                        <small class="form-text text-danger">{{$errors->first('puesto')}}</small>
                    @endif
                    <br>
                </div>
            </div>
            

            <a href="{{route('personal.index')}}" class="btn btn-outline-primary">CANCELAR</a>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection