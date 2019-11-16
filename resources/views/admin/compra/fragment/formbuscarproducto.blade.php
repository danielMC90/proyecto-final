<h2>Buscar Producto</h2>
<form action="{{ route('producto.buscar') }}">
    <div class="row">
        <div class="col">
            <label for="productoSearch-tipo">Tipo Producto</label>
            <input type="text" name="productoSearch-tipo" id="productoSearch-tipo" class="form-control">
        </div>
        <div class="col">
            <label for="productoSearch-marca">Marca</label>
            <input type="text" name="productoSearch-marca" id="productoSearch-marca" class="form-control">
        </div>
        <div class="col">
            <label for="productoSearch-descripcion">Descripcion</label>
            <input type="text" name="productoSearch-descripcion" id="productoSearch-descripcion" class="form-control">
        </div>
        <div class="col">
            <a href="#" id="producto-btn-buscarproducto" class="btn btn-primary">Buscar</a>
        </div>
    </div>
</form>
