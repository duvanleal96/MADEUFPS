<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<?php 

session_start();
$nombre = $_SESSION['usuario'];
require_once 'header.php'; 

?>

<body class="hold-transition skin-blue sidebar-mini">
    <?php require_once 'menuDocente.php'; ?>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Registro Estudiante
                </h1>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="register-box-body ">
                    <p class="login-box-msg">Registar estudiante </p>
                    <form id="FormRegistroEstudiante" name="FormRegistroEstudiante" action="../../modelo/registroEstudiante.php" method="post">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2"></div>
                            <div class="col-xs-8 col-sm-8">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="number" class="form-control" placeholder="Cedula" name="cedula" id="cedula">
                                    <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="number" class="form-control" placeholder="Codigo" name="codigo" id="codigo">
                                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Dirección" name="direccion" id="direccion">
                                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="number" class="form-control" placeholder="Teléfono" name="telefono" id="telefono">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Correo institucional" name="correo" id="correo">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"></div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                            </div>
                            <div class="col-xs-4"></div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <div class="control-sidebar-bg"></div>
        <?php require_once 'footer.php'; ?>
    </div>
    <!-- ./wrapper -->
</body>
</html>