<!DOCTYPE html>
<html>

<?php

session_start();
$nombre = $_SESSION['usuario'];
$codigo = $_SESSION['codigo'];

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <html lang="es">
  <title>MADEUFPS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Custom Sweetalert2 -->
  <link rel="stylesheet" href="css/sweetalert2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="indexEstudiante.php" class="logo">
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
                <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Estudiante</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p><?php echo $nombre; ?></p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="pages/Perfil_estudiante.php" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="pages/salir.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
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
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
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
              <li><a href="indexEstudiante.php"><i class="fa fa-circle-o"></i>Mis notas</a></li>
              <li><a href="indexEstudiante.php"><i class="fa fa-circle-o"></i>Analisis y Diseño</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Materias matriculadas</h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="bg-gray-active color-palette">
                    <tr>
                      <th>Código</th>
                      <th>Materia</th>
                      <th>Nota</th>
                      <th>Actividad</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    try {
                      require_once '../controlador/conexion.php';
                      $sql = "SELECT curso.id_curso, curso.nombre, grupo_alumno.nota from curso inner join grupo_alumno on curso.id_curso = grupo_alumno.id_curso 
                        where grupo_alumno.id_alumno = '$codigo'";
                      $resultado = $conexion->query($sql);

                      while ($estudiante = $resultado->fetch_assoc()) { ?>
                        <tr align="center">
                          <td><?php echo $estudiante['id_curso'] ?></td>
                          <td><?php echo $estudiante['nombre'] ?></td>
                          <td><?php echo $estudiante['nota'] ?></td>
                          <td align="center">
                            <a class="btn btn-social-icon btn-facebook" data-toggle="modal" data-target="#modal-default">
                              <i class="fa fa-upload"></i>
                            </a>
                          </td>
                        </tr>
                    <?php }
                    } catch (Exception $e) {
                      $error = $e->getMessage()();
                      echo $error;
                    }
                    mysqli_close($conexion);
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="formActividadEstudiante" name="formActividadEstudiante" action="../modelo/cargar_actividad.php" method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Subir nota</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                  <div class="form-group has-feedback">
                    <input type="file" class="form-control" id="actividad_estudiante" name="actividad_estudiante">
                  </div>
                </div>
                <div class="col-xs-2"></div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
      </div>
      <!-- Default to the left -->
      <strong>
        <span>Copyright &copy; MADEUFPS
          <script>
            document.write(new Date().getFullYear());
          </script>
        </span>
      </strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="js/ver.js"></script>
  <!-- Javascript Sweetalert2 -->
  <script src="js/sweetalert2.min.js"></script>
  <script src="js/evidencia.js"></script>
  <!-- page script -->
  <script>
    $(document).ready(function() {
      $('#example1').DataTable({
        'language': {
          paginate: {
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Último',
            first: 'Primero'
          },
          info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
          emptyTable: 'No hay registros',
          infoEmpty: '0 Registros',
          search: 'Buscar: ',
          lengthMenu: "Mostrar _MENU_ Entradas",
          infoFiltered: "(Filtrado de _MAX_ total entradas)"
        }
      });
    });
  </script>
</body>

</html>