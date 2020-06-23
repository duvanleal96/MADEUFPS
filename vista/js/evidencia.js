/*
Método para subir los archivos a la base de datos de evidencia en el panel de empresa
*/
$(document).ready(function() {
    $("#formActividadEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                /* var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta); */
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha subido correctamente la actividad',
                        'success'
                    )
                    $('#modal-default').modal('hide');
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                } else if (dataa == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Ups!',
                        text: 'Error al subir la actividad'
                    })
                }
            }
        });
    });
});

/*
Método para subir los archivos a la base de datos de evidencia en el panel de empresa
*/
$(document).ready(function() {
    $("#FormCargarActividad").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                /* var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta); */
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha subido correctamente la actividad',
                        'success'
                    )
                    document.getElementById("FormCargarActividad").reset();
                } else if (dataa == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Ups!',
                        text: 'Error al subir la actividad'
                    })
                }
            }
        });
    });
});