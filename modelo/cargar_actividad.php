<?php

require_once '../controlador/conexion.php';
session_start();

//die(json_encode($_FILES));
//die(json_encode($_POST));

$estudiante = $_SESSION['codigo'];
$directorio = "Archivos/";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['actividad_estudiante']['tmp_name'], $directorio . $_FILES['actividad_estudiante']['name'])){
    $archivo_url = $_FILES['actividad_estudiante']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO cargar_actividad (id_cargar, ruta_actividad, id_grupo_alumno) VALUES (NULL, '$archivo_url', '$estudiante');";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));