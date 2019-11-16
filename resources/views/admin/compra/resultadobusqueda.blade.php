<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Item</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th colspan="1">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @isset($productos)
            @forelse ($productos as $i=>$item)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tipoProducto->nombre }}</td>
                <td>{{ $item->marca->nombre }}</td>
                <td>{{ $item->descripcion}}</td>
                <td>
                    <form action="seleccccc">
                        <a href="#" id="compra-seleccionarproducto" class="btn btn-info">+</a>
                    </form>
                </td>

            </tr>
            @empty
                <p>no hay</p>
            @endforelse
        @endisset

    </tbody>
</table>
@isset($productos)
    {{ $productos->links() }}
@endisset
