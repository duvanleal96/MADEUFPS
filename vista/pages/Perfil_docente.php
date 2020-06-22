<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<?php

session_start();
$nombre = $_SESSION['usuario'];
$codigo = $_SESSION['codigo'];
$documento = $_SESSION['documento'];
$direccion = $_SESSION['direccion'];
$telefono = $_SESSION['telefono'];
$correo = $_SESSION['correo'];

?>

<?php require_once 'header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

    <?php require_once 'menuDocente.php'; ?>

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Registro Curso</h1>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="register-box-body">
                    <p class="login-box-msg">Perfil</p>
                    <form id="FormRegistroProfesor" name="FormRegistroProfesor">
                        <div class="row">
                            <div class="col-xs-3"></div>
                            <div class="col-xs-6">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="<?php echo $nombre; ?>" name="nombre" id="nombre" readonly>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="<?php echo $codigo; ?>" name="documento" id="cedula" readonly>
                                    <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="<?php echo $codigo; ?>" name="codigo" id="codigo" readonly>
                                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="<?php echo $direccion; ?>" name="direccion" id="direccion" readonly>
                                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="<?php echo $telefono; ?>" name="telefono" id="telefono" readonly>
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="<?php echo $correo; ?>" name="correo" id="correo" readonly>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="col-xs-3"></div>
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