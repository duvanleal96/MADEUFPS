<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$codigoCurso = $_POST['codigoCurso'];
$nombreCurso = $_POST['nombre'];
$codigoDocente = $_POST['docente'];
$numEstudiantes = $_POST['estudiantes'];

$sql = "INSERT INTO curso (id_curso, nombre, docente, num_estudiantes) VALUES ('$codigoCurso', '$nombreCurso', '$codigoDocente', '$numEstudiantes')";

$ejecutar = mysqli_query($conexion, $sql);
if ($ejecutar) {
    $respuesta = array(
        'respuesta' => 'exito'
    );
} else {
    $respuesta = array(
        'respuesta' => 'error'
    );
}
echo json_encode($respuesta);

mysqli_close($conexion);
