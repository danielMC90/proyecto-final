<h2>Productos encontrados</h2>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Item</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th colspan="1">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($productos))
            @forelse ($productos as $i->$item)
            <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tipoProducto->nombre }}</td>
                    <td>{{ $item->marca->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td><a href="#" class="btn btn-primary">+</a></td>
                </tr>
            @empty
                <p>no hay</p>
            @endforelse
        @else
            <p>no hay productos...</p>
        @endif

    </tbody>
</table>
@unless (@productos)
    {{ $productos->links() }}
@endunless
