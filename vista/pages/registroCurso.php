<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

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
        <h1>
          Registro Curso
        </h1>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <div class="register-box-body ">
          <p class="login-box-msg">Registro de Nuevo Curso </p>
          <form id="FormRegistroCurso" name="FormRegistroCurso" action="../../modelo/registrarCurso.php" method="post">
            <div class="row">
              <div class="col-xs-2 col-sm-2"></div>
              <div class="col-xs-8 col-sm-8">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" placeholder="Código" name="codigo" id="codigo" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" placeholder="Cantidad de estudiantes" name="estudiantes" id="estudiantes" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <!-- <div class="col-md-3"></div> -->
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
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

    <!-- Main Footer -->
    <div class="control-sidebar-bg"></div>
    <?php require_once 'footer.php'; ?>
  </div>
  <!-- ./wrapper -->
</body>

</html>