<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombreProfesor = $_POST['nombre'];
$cedulaProfesor = $_POST['cedula'];
$codigoProfesor = $_POST['codigo'];
$direccionProfesor = $_POST['direccion'];
$correoProfesor = $_POST['correo'];

$sql = "INSERT INTO docente (documento, nombre, codigo, direccion, correo_institucional) 
        VALUES ('$cedulaProfesor', '$nombreProfesor', '$codigoProfesor', '$direccionProfesor', '$correoProfesor')";

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
