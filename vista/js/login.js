$(document).ready(function() {
    $("#form").on('submit', function(e) {
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
                if (resultado.respuesta == 'exitoso') {
                    Swal.fire(
                        'Iniciaste sesión',
                        'Bienvenido(a) a MADEUFPS',
                        'success'
                    )
                    if (resultado.rol == 'admin') {
                        setTimeout(function() {
                            window.location.href = "vista/indexAdmin.php";
                        }, 2000);
                    } else if (resultado.rol == 'alumno') {
                        setTimeout(function() {
                            window.location.href = "vista/indexEstudiante.php";
                        }, 2000);
                    } else if (resultado.rol == 'docente') {
                        setTimeout(function() {
                            window.location.href = "vista/indexDocente.php";
                        }, 2000);
                    }
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario y/o contraseña incorrectos'
                    })
                }
            }
        });
    });
});