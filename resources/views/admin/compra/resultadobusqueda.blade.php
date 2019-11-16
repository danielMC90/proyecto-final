<div class="card col">
    <div class="card-header">
        <h2>Productos encontrados</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Itemsssss</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Descripcion</th>
                    <th colspan="1">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($productos))
                    @forelse ($productos as $i=>$item)
                    <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tipoProducto->nombre }}</td>
                            <td>{{ $item->marca->nombre }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td><a id="detallecompra-btn-agregarproducto" href="#" class="btn btn-primary">+</a></td>
                        </tr>
                    @empty
                    @endforelse
                @else
                @endif

            </tbody>
        </table>
        @unless (@productos)
            {{ $productos->links() }}
        @endunless

    </div>
</div>


