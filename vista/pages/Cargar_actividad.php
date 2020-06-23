<!DOCTYPE html>
<html>

<?php

session_start();
$nombre = $_SESSION['usuario'];
$codigo = $_SESSION['codigo'];
require_once 'header.php';

?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php require_once 'menuDocente.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cargar actividades</h1>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="register-box-body">
                    <p class="login-box-msg">Cargar actividades al curso</p>
                    <form id="FormCargarActividad" name="FormCargarActividad" action="../../modelo/actividadCurso.php" method="post">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2"></div>
                            <div class="col-xs-8 col-sm-8">
                                <div class="form-group has-feedback">
                                    <input type="file" class="form-control" placeholder="Código de la materia" name="actividad-curso" id="actividad-curso" required>
                                </div>
                                <div class="form-group" style="width: 100%;">
                                    <select class="form-control" id="buscarMateria" name="buscarMateria">
                                        <option>Seleccione la materia</option>
                                        <?php
                                        try {
                                            require_once '../../controlador/conexion.php';
                                            session_start();
                                            $nombre = $_SESSION['usuario'];
                                            $sql = "SELECT id_curso, nombre FROM curso WHERE docente = '$codigo'";
                                            $resultado = $conexion->query($sql);
                                        } catch (Exception $e) {
                                            $error = $e->getMessage();
                                        }
                                        while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                            <option value="<?php echo $estudiante['id_curso'] ?>"><?php echo $estudiante['id_curso'] . ' - ' . $estudiante['nombre']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <!-- <div class="col-md-3"></div> -->
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Cargar actividad</button>
                                    </div>
                                    <!-- <div class="col-md-3"></div> -->
                                    <!-- /.col -->
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2"></div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'footer.php'; ?>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- END CONTENIDO DE LA PAGINA -->
    <script src="../js/ver.js"></script>
    <script src="../js/nota.js"></script>
    <script src="../js/evidencia.js"></script>
    <!-- ./wrapper -->
</body>

</html>