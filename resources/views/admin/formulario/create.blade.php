@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <legend>Registrar</legend>
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('formulario.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Persona</label>
                                <select name="idPersona" id="idPersona" class="form-control">
                                    <option value="">seleccione</option>
                                    @foreach ($persona as $per)
                                        <option value="{{$per->id}}">{{$per->nombres}} {{$per->apPaterno}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        <div class="col-md-4">
                            <label for="">Fecha</label>
                            <input type="datetime-local" name="fecha" id="fecha" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Razon Social</label>
                                <input type="text" name="razonSocial" id="razonSocial" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">NIT</label>
                            <input type="text" name="nit" id="nit" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Producto</label>
                               <select name="idProducto" id="idProducto" class="form-control">
                                   <option value="">Seleccione</option>
                                   @foreach ($producto as $prod)
                                       <option value="{{$prod->id}}">{{$prod->nombre}}</option>
                                   @endforeach
                               </select>
                               <input type="text" name="precio" id="precio" value="{{$prod->precio}}">
                        </div>
                        <div class="col-md-2">
                            <label for="">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control">
                        </div>
                        <div class="col-md-4">
                                <label for="">Total</label>
                                <input type="number" name="total" id="total" value="" class="form-control">
                            </div>
                    </div>
                </form>
            </div>            
        </div>
    </div>

    <script>
        function sumar(){
            var n1 = document.getElementById('precio').value;
            var n2 = document.getElementById('cantidad').value;
            var suma = parseFloat(n1)*parseFloat(n2);
            $("#total").html(suma);
        }
    </script>
@endsection