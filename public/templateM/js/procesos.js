$(document).on('click', '#agregarProducto', function(e){
    e.preventDefault();

    var route = 'http://127.0.0.1:8000/producto/buscar';

    var tipoProducto = $("#tipoproductoSearch-nombre").val();
    var marcaProducto = $("#marcaSearch-nombre").val();
    var descripcionProducto = $("#productoSearch-descripcion").val();
    //alert(tipoProducto + ' ' + marcaProducto + ' ' + descripcionProducto);
    $.get(route, {tipoProducto: tipoProducto, marcaProducto: marcaProducto, descripcionProducto: descripcionProducto})
    .done(function(data) {
        alert(data);
    },
    "json");
});
