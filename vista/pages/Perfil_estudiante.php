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
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="../indexEstudiante.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->

            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>MADEUFPS</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">Estudiante</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                                <p><?php echo $nombre; ?></p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="Perfil_estudiante.php" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="../pages/salir.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Estudiante</p>
                </div>
            </div>
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-plus-square-o"></i>
                        <span>Mis Cursos</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../indexEstudiante.php"><i class="fa fa-circle-o"></i>Mis notas</a></li>
                        <li><a href="../indexEstudiante.php"><i class="fa fa-circle-o"></i>Analisis y Diseño</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Perfil Estudiante</h1>
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