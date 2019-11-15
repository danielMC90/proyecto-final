@extends('plantilla')
@section('contenido')
    
        <div class="card">
            <div class="card-header">
                <legend> REGISTRO DE SOPORTE</legend>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{route('soporte.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="">SOPORTE A:</label>
                                    <select name="idPersonal" id="idPersonal" class="form-control">
                                        <option value="">SELECCIONE</option>
                                        @foreach ($personal as $per)
                                        <option value="{{$per->id}}"> {{$per->persona->nombres}} {{$per->persona->apPaterno}} {{$per->persona->apMaterno}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('idPersonal'))
                                        <small class="form-text text-danger">{{$errors->first('idPersonal')}}</small>
                                    @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <br>    
                                <label for="">TIPO DE SOPORTE</label>
                                    <select name="idTipoSoporte" id="idTipoSoporte" class="form-control">
                                        <option value="">SELECCIONE</option>
                                        @foreach ($tipoSoporte as $tipoSo)
                                        <option value="{{$tipoSo->id}}">{{$tipoSo->nombre}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('idTipoSoporte'))
                                        <small class="form-text text-danger">{{$errors->first('idTipoSoporte')}}</small>
                                    @endif
                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">FECHA</label>
                                    <input type="datetime" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>"class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">ASUNTO</label>
                                <input type="text" name="asunto" id="asunto" class="form-control">
                                @if ($errors->has('asunto'))
                                    <small class="form-text text-danger">{{$errors->first('asunto')}}</small>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">PROCESOS</label>
                                <textarea class="form-control" id="procesos" name="procesos" rows="5" cols="100%" placeholder="Describa los procesos ..."></textarea>
                                @if ($errors->has('procesos'))
                                    <small class="form-text text-danger">{{$errors->first('procesos')}}</small>
                                @endif
                                <br>
                            </div>
                            <div class="col-md-8">
                                <label for="">RESOLUCION</label>
                                <textarea class="form-control" id="resolucion" name="resolucion" rows="3" placeholder="..."></textarea>
                                @if ($errors->has('resolucion'))
                                    <small class="form-text text-danger">{{$errors->first('resolucion')}}</small>
                                @endif
                                <br>
                            </div>
                            <div class="col-md-8">
                                <label for="">RECOMENDACION</label>
                                <textarea class="form-control" id="recomendacion" name="recomendacion" rows="3" placeholder="Recomendaciones ..."></textarea>
                                @if ($errors->has('recomendacion'))
                                    <small class="form-text text-danger">{{$errors->first('recomendacion')}}</small>
                                @endif
                                <br>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">GUARDAR</button>
                    </form>
                </div>
            </div>
        </div>
    
@endsection