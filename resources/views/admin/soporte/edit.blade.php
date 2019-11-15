@extends('plantilla')
@section('contenido')
    
        <div class="card">
            <div class="card-header">
                <legend> REGISTRO DE SOPORTE</legend>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{route('soporte.update',$soporte->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="">PERSONAL</label>
                                    <select name="idPersonal" id="idPersonal" class="form-control">
                                        <option value="{{$soporte->idPersonal}}">{{$soporte->personal->persona->nombres}}</option>
                                        @foreach ($personal as $per)
                                        <option value="{{$per->id}}"> {{$per->persona->nombres}} {{$per->persona->apPaterno}} {{$per->persona->apMaterno}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <br>    
                                <label for="">TIPO DE SOPORTE</label>
                                    <select name="idTipoSoporte" id="idTipoSoporte" class="form-control">
                                        <option value="{{$soporte->idTipoSoporte}}">{{$soporte->tipoSoporte->nombre}}</option>
                                        @foreach ($tipoSoporte as $tipoSo)
                                        <option value="{{$tipoSo->id}}">{{$tipoSo->nombre}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">FECHA</label>
                                    <input type="date" name="fecha" id="fecha" value="{{$soporte->fecha}}"class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">ASUNTO</label>
                                <input type="text" name="asunto" id="asunto" value="{{$soporte->asunto}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">PROCESOS</label>
                                <textarea class="form-control" id="procesos" name="procesos" rows="5" cols="100%" >{{$soporte->procesos}}</textarea>
                                <br>
                            </div>
                            <div class="col-md-8">
                                <label for="">RESOLUCION</label>
                                <textarea class="form-control" id="resolucion" name="resolucion" rows="3" >{{$soporte->resolucion}}</textarea>
                                <br>
                            </div>
                            <div class="col-md-8">
                                <label for="">RECOMENDACION</label>
                                <textarea class="form-control" id="recomendacion" name="recomendacion" rows="3" >{{$soporte->recomendacion}}</textarea>
                                <br>
                            </div>
                        </div>
                        <a href="{{route('soporte.index')}}" class="btn btn-outline-primary">CANCELAR</a>
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    </form>
                </div>
            </div>
        </div>
    
@endsection