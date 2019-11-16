<div class="card col">
    <div class="card-header">
        <h2>Buscar Producto</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <input id="ruta_buscarproducto" type="hidden" value="{{ route('producto.buscar') }}">
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
    </div>
</div>
