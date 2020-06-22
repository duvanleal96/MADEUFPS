<!DOCTYPE html>
<html>
<?php

session_start();
$codigo = $_SESSION['codigo'];

?>

<?php require_once 'header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php require_once 'menuDocente.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Subir notas</h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <form class="user" method="POST">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Seleccione la materia a calificar</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6">
                      <div class="form-group" style="width: 100%;">
                        <select class="form-control" id="buscarMateria" name="buscarMateria">
                          <option>Seleccione la materia</option>
                          <?php
                          try {
                            require_once '../../controlador/conexion.php';
                            echo '<h2>' . $codigo . '</h2>';
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
                    </div>
                    <div class="col-xs-3"></div>
                  </div>
                  <div class="row">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-block btn-danger">Cargar</button>
                    </div>
                    <div class="col-xs-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Listados de los estudiantes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>C&oacute;digo</th>
                        <th>Nombre</th>
                        <th>Nota</th>
                        <th>Ver</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      try {
                        require_once '../../controlador/conexion.php';
                        if (isset($_POST['buscarMateria'])) {
                          $materia = $_POST['buscarMateria'];
                          $sql = "SELECT persona.codigo, persona.nombre, grupo_alumno.nota from persona inner join grupo_alumno 
                          on persona.codigo = grupo_alumno.id_alumno inner join curso on grupo_alumno.id_curso = curso.id_curso where curso.id_curso = '$materia'";
                          $resultado = $conexion->query($sql);

                          while ($estudiante = $resultado->fetch_assoc()) { ?>
                            <tr align="center">
                              <td><?php echo $estudiante['codigo'] ?></td>
                              <td><?php echo $estudiante['nombre'] ?></td>
                              <td><?php echo $estudiante['nota'] ?></td>
                              <td align="center">
                                <a id="informacion" onclick="verNota('<?php echo $estudiante['codigo'] ?>')" class="btn btn-social-icon btn-facebook">
                                  <i class="fa fa-eye"></i>
                                </a>
                              </td>
                            </tr>
                      <?php }
                        }
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
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'footer.php'; ?>
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
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- START MODAL USER -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="FormActualizarNota" name="FormActualizarNota" action="../../modelo/actualizarNota.php" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nota del estudiante </h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-3"></div>
              <div class="col-xs-6">
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" name="codigoEstudiante" id="codigoEstudiante" readonly>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" name="estudiante" id="estudiante" readonly>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="number" step="0.01" class="form-control" name="notaEstudiante" id="notaEstudiante" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
              </div>
              <div class="col-xs-3"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guadar cambios</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- END MODAL USER -->
  </div>
  </div>
  </div>
  <!-- END CONTENIDO DE LA PAGINA -->
  <script src="../js/ver.js"></script>
  <script src="../js/nota.js"></script>
  <!-- ./wrapper -->
</body>

</html>