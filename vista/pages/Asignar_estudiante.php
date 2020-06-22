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
        <h1>Asignar estudiante</h1>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <div class="register-box-body">
          <p class="login-box-msg">Registro estudiante al curso</p>
          <form id="FormAsignarEstudiante" name="FormAsignarEstudiante" action="../../modelo/asignarEstudiante.php" method="post">
            <div class="row">
              <div class="col-xs-2 col-sm-2"></div>
              <div class="col-xs-8 col-sm-8">
              <div class="form-group" style="width: 100%;">
                  <select class="form-control" id="materia" name="materia">
                    <option value="seleccioneMateria">Seleccione la asignatura</option>
                    <?php
                    try{
                      require_once '../../controlador/conexion.php';
                      $sql = "SELECT id_curso, nombre FROM curso";
                      $resultado = $conexion->query($sql);
                    }catch(Exception $e){
                      $error = $e->getMessage();
                    }
                    while ($materia = mysqli_fetch_array($resultado)) { ?>
                      <option value="<?php echo $materia['id_curso']?>"><?php echo $materia['id_curso'] . ' - ' . $materia['nombre']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group" style="width: 100%;">
                  <select class="form-control" id="estudiante" name="estudiante">
                    <option value="seleccioneEstudiante">Seleccione el estudiante</option>
                    <?php
                    try{
                      require_once '../../controlador/conexion.php';
                      $sql = "SELECT persona.codigo, persona.nombre FROM persona INNER JOIN rol ON persona.rol = rol.id_rol where rol.nombre = 'Estudiante'";
                      $resultado = $conexion->query($sql);
                    }catch(Exception $e){
                      $error = $e->getMessage();
                    }

                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                      <option value="<?php echo $estudiante['codigo']?>"><?php echo $estudiante['codigo'] . ' - ' . $estudiante['nombre']; ?></option>
                    <?php } ?>
                  </select>
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