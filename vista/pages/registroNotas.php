<!DOCTYPE html>
<html>

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
                      <select class="form-control" id="docente" name="docente">
                        <option>Seleccione el doncente</option>
                        <?php
                        try {
                          require_once '../../controlador/conexion.php';
                          $sql = "SELECT curso.id_curso, curso.nombre FROM curso INNER JOIN persona ON curso.docente = persona.codigo WHERE persona.codigo =  '100'";
                          $resultado = $conexion->query($sql);
                        } catch (Exception $e) {
                          $error = $e->getMessage();
                        }
                        while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                          <option value="<?php echo $estudiante['id_curso']?>"><?php echo $estudiante['id_curso'] . ' - ' . $estudiante['nombre']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-3"></div>
                </div>
                <div class="row">
                  <div class="col-xs-4"></div>
                  <div class="col-xs-4">
                    <button type="button" class="btn btn-block btn-danger">Cargar</button>
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


                    ?>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td align="center"><a class="btn btn-social-icon btn-facebook"><i class="fa fa-eye"></i></a></td>
                    </tr>
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
  <!-- ./wrapper -->
</body>

</html>