<?php

require_once '../controlador/conexion.php';

//die(json_encode($_FILES));
//die(json_encode($_POST));

$materia = $_POST['buscarMateria'];
$directorio = "Archivos/";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['actividad-curso']['tmp_name'], $directorio . $_FILES['actividad-curso']['name'])){
    $archivo_url = $_FILES['actividad-curso']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO cargar_microcurriculo (id_carga, id_curso, ruta_archivo) VALUES (NULL, '$materia', '$archivo_url')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));