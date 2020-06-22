<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$codigo = $_POST['codigoEstudiante'];
$nota = $_POST['notaEstudiante'];

$sql = "UPDATE grupo_alumno SET nota = '$nota' WHERE id_alumno = '$codigo'";

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