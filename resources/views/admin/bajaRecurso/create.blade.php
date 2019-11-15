@extends('plantilla')
@section('contenido')
<div class="card">
    <div class="card-header">
        <legend>REGISTRAR BAJA DE RECURSO</legend>
    </div>
    <div class="card-body">
        <form action="{{route('bajaRecurso.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="">RECURSO</label>
                    <select name="idRecurso" id="idRecurso" class="form-control">
                        <option value="">seleccione el recurso</option>
                        @foreach ($recurso as $recur)
                            <option value="{{$recur->id}}">{{$recur->serie}} - {{$recur->marca->nombre}}</option>
                        @endforeach
                   </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">ASUNTO</label>
                    <input type="text" name="asunto" id="asunto" class="form-control">
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label for="">DETALLES</label>
                    <input type="text" name="detalles" id="detalles" class="form-control">
                </div>
                
            </div>
            

            <a href="{{route('bajaRecurso.index')}}" class="btn btn-outline-danger">CANCELAR</a>
            <button type="submit" class="btn btn-danger">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection