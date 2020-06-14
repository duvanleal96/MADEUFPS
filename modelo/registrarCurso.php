<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombreCurso = $_POST['nombre'];
$codigoCurso = $_POST['codigo'];
$numEstudiantes = $_POST['estudiantes'];

$sql = "INSERT INTO curso (id_curso, nombre, num_estudiantes) VALUES ('$codigoCurso', '$nombreCurso', '$numEstudiantes');";

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
