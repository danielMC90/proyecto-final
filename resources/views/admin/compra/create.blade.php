@extends('plantilla')
@section('contenido')
    <div class="card">
        <div class="card-header">

                <legend class="text-center">COMPRA</legend>

             {{--  inicia form  --}}

                <form action="{{route('compra.store')}}" method="post">
            <div class="row">
                    @csrf
                    <div class="col-md-4">
                        PROVEEDOR
                            <select name="idProveedor" id="idProveedor" class="form-control" required>
                                <option value="">seleccione</option>
                                @foreach ($proveedor as $prov)
                                    <option value="{{$prov->id}}">{{$prov->razonSocial}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        FECHA
                        <input type="date" name="fecha" id="fecha" value="<?php echo date("Y-n-j"); ?>" class="form-control">
                        <br>
                    </div>

                <div class="col-md-8">
                        DESCRIPCION
                        <input type="text" name="detalles" id="detalles" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form id='frm-producto-search'>
                <div class="row"> <h2>Buscar Producto</h2></div>
                <div class="row">
                    <div class="col">
                        <label for="tipoproductoSearch-nombre">Tipo Producto</label>
                        <input type="text" name="tipoproductoSearch-nombre" id="tipoproductoSearch-nombre" class="form-control">
                    </div>
                    <div class="col">
                        <label for="marcaSearch-nombre">Marca</label>
                        <input type="text" name="marcaSearch-nombre" id="marcaSearch-nombre" class="form-control">
                    </div>
                    <div class="col">
                        <label for="marcaSearch-nombre">Descripcion</label>
                        <input type="text" name="productoSearch-descripcion" id="productoSearch-descripcion" class="form-control">
                    </div>
                </div>


            </form>
            <div class="productos">
                <div class="row">
                    <h2>Resultado Busqueda Producto</h2>
                </div>
                <div class="row">
                    <table class="col-sm-12">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Description</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <button type="button" id="agregarProducto" name="agregarProducto" onclick="agregarFila()" class="btn btn-info">AGREGAR PRODUCTO</button>
            <hr>
            <h2>Detalle Compra</h2>
            <table id="tablaCompra" class="table table-bordered table">
                <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>CANTIDAD</th>
                        <th>PRECIO UNITARIO</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{--  <select name="idProducto[]" id="idProducto" class="form-control">
                                <option value="">producto</option>
                                @foreach ($producto as $product)
                                    <option value="{{$product->id}}">{{$product->descripcion}}</option>
                                @endforeach
                            </select>  --}}
                            <input type="text" name="idProducto[]" id="idProducto" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="cantidad[]" id="cantidad" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="precioUnitario[]" id="precioUnitario" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="subtotal[]" id="subtotal" class="form-control">
                        </td>

                    </tr>
                </tbody>
            </table>

        </div>
        <div class="col-4">
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                  GUARDAR
                </button>
            </div>
        {{--  fin form  --}}
    </div>


<script>
        // esta funcion de javascript hace que agrege una fila a la tabla. cuando se le da click en el boton AGREGAR PRODUCTO
        function agregarFila(){
            document.getElementById("tablaCompra").insertRow(-1).innerHTML="<td> <input type='text' name='idProducto[]'' id='idProducto' class='form-control'> </td> <td> <input type='text' name='cantidad[]'' id='cantidad' class='form-control'> </td>   <td> <input type='text' name='precioUnitario[]'' id='precioUnitario' class='form-control'> </td>        <td> <input type='text' name='subtotal[]'' id='subtotal' class='form-control'> </td>";
        }





    </script>
@endsection



