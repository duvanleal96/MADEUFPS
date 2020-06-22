function verNota(cedula) {
    var cedulanit = String(cedula);
    console.log("cedula " + cedulanit);
    $('#modal-default').modal('show');
    $.ajax({
        url: '../../modelo/ver.php',
        data: {
            ver: 'verNota',
            cedula: cedula
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('codigoEstudiante').value = resultado.codigo;
                document.getElementById('estudiante').value = resultado.nombre;
                document.getElementById('notaEstudiante').value = resultado.nota;
                console.log(resultado.nota);
            }
        }
    })
}