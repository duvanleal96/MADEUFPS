/**
 * Método para actualizar una nota
 */
$(document).ready(function() {
    $("#FormActualizarNota").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se actualizado la nota correctamente',
                        'success'
                    )
                    $('#modal-default').modal('hide');
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                }
            }
        });
    });
});