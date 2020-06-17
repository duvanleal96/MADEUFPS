<?php

require_once '../controlador/conexion.php';

die(json_encode($_POST));

$ingresarUsuario = $_POST['codigo'];
$ingresarContrasena = $_POST['contrasena'];
$ingresarTipo = $_POST['tipo'];

$sql = "SELECT persona.nombre, persona.codigo, persona.documento FROM persona INNER JOIN rol ON persona.rol = rol.id_rol WHERE persona.codigo = '$ingresarUsuario' 
        AND persona.documento = '$ingresarContrasena' and rol.nombre = '$ingresarTipo'";

$ejecutar = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($ejecutar);

if ($ingresarTipo == 'Director') {
    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['usuario'] = $row['nombre'];
        $_SESSION['codigo'] = $row['codigo'];
        $respuesta = array(
            'respuesta' => 'exitoso',
            'rol' => 'admin',
            'usuario' => $row['nombre'],
            'codigo' => $row['codigo'],
        );
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($ingresarTipo == 'Docente') {
    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['usuario'] = $row['nombre'];
        $_SESSION['codigo'] = $row['codigo'];
        $respuesta = array(
            'respuesta' => 'exitoso',
            'rol' => 'docente',
            'usuario' => $row['nombre'],
            'codigo' => $row['codigo'],
        );
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($ingresarTipo == 'Estudiante') {
    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['usuario'] = $row['nombre'];
        $_SESSION['codigo'] = $row['codigo'];
        $respuesta = array(
            'respuesta' => 'exitoso',
            'rol' => 'alumno',
            'usuario' => $row['nombre'],
            'codigo' => $row['codigo'],
        );
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}

mysqli_close($conexion);
