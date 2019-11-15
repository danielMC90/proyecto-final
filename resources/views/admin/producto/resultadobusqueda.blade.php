<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->tipoProducto->nombre }}</td>
            <td>{{ $producto->marca->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $productos->links() }}
