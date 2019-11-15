@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>REGISTRAR USUARIO</legend>
        </div>
        <div class="card-body">
            <form action="{{route('usuario.store')}}" method="post">
                @csrf
                <label for="">PERSONA</label>
                <select name="idPersona" id="idPersona" class="form-control">
                    <option value="">Seleccione</option>
                    @foreach ($persona as $per)
                        <option value="{{$per->id}}">{{$per->nombres}} {{$per->apPaterno}}</option>
                    @endforeach
                </select>
                <label for="">CONTRASEÑA</label>
                <input type="text" name="contrasenha" id="contrasenha" class="form-control" required>
                
                <a href="{{route('usuario.index')}}" class="btn btn-outline-info">CANCELAR</a>
                <button type="submit" class="btn btn-info">GUARDAR</button>
            </form>
        </div>
    </div>
@endsection