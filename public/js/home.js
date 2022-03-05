$(document).ready( function () {
    $('#products').DataTable();

} );

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function consultarProducto(id) {


    $.ajax({
        url: 'consultarProducto',

        data: {
          //  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

            id:id,
        },
        type: 'POST',
        dataType: 'json',
        success: function (json) {
            if (json.mensaje === "ok") {
                nombreProducto = json.dataProducto.nombre_producto;
                descripcion = json.dataProducto.descripcion;
                precio = json.dataProducto.precio;
                fecha = json.dataProducto.fecha_publicacion;

                toastr["success"]("<h6>" + nombreProducto + "<br>"+ descripcion + "<br>"+  precio + "<br>"+ fecha + "</h6>", "INFORMACION")

            }
        },
        error: function (xhr, status) {
            alert('Disculpe, existió un problema en el servidor - Recargue la Pagina');
        },
        complete: function (xhr, status) {
        }
    });

    }
