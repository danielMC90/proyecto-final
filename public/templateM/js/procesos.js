$(document).on('click', '#producto-btn-buscarproducto', function(e){
    e.preventDefault();
    var form = $(this).parents('form');
    var route = form.attr('action');

    console.log(route);
    $.get(route, form.serialize(), function(result){
        //console.log(result);
        $('#compra-productosencontrados').html(result);
    });
});

$(document).on('click', '#compra-seleccionarproducto', function(e){
    e.preventDefault();
    var id_producto = $(this).parents('tr').find('td').eq(1).text();
    var tipo = $(this).parents('tr').find('td').eq(2).text();
    var marca = $(this).parents('tr').find('td').eq(3).text();
    var descripcion = $(this).parents('tr').find('td').eq(4).text();

    var row =   '<tr>' +
                '<td>1</td>' +
                '<td>'+id_producto+'</td>' +
                '<td>'+tipo+'</td>' +
                '<td>'+marca+'</td>' +
                '<td>'+descripcion+'</td>' +
                '<td>'+
                    '<input type="hidden" id="id_producto[]" name="id_producto[]" value="1" class="form-control">' +
                    '<input type="text" id="cantidad[]" name="cantidad[]" value="1" class="form-control"> ' +
                '</td>' +
                '<td><input type="text" id="subtotal[]" name="cantidad[]" value="0" class="form-control"></td>' +
                '<td><a id="detallecompra-quitarproducto" href="#" class="btn btn-primary">Quitar</a></td>' +
                '<tr>';
    console.log(row);
    $('#compra-detalle').append(row);
});

$(document).on('click', '#btn-prueba', function(e){
    e.preventDefault();

    alert('probando');
});

