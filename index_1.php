<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MADEUFPS</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="vista/css/style.css">
    <!-- Custom style Sweetalert2 -->
    <link href="vista/css/sweetalert2.min.css" rel="stylesheet">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/dist/css/AdminLTE.min.css">
</head>

<body>
    <div class="container ">
        <div id="contenido">
            <br>
            <div>
                <img src="vista/images/logo.png" id="icon" alt="logo" />
            </div>
            <br><br>
            <form id="FormLogin" method="POST" name="FormLogin" action="modelo/login.php">
                <div class="row">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-md-8 col-lg-8">
                        <div class="form-group">
                            <input type="text" id="usuario" class="fadeIn second" name="codigo" placeholder="Código">
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-md-8 col-lg-8">
                        <div class="form-group">
                            <input type="password" id="contrasenia" class="fadeIn third" name="contrasena" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-md-8 col-lg-8">
                        <div class="form-group">
                            <select class="form-control" id="tipo" name="tipo">
                                <option>Seleccione el tipo</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3"></div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <button type="submit" name="enviar" class="btn btn-block btn-danger btn-lg">Acceder</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3"></div>
                </div>
            </form>
            <div id="footer">
                <a class="underlineHover" href="#">¿Olvidó su Contraseña?</a>
            </div>
        </div>
    </div>
    <!-- Footer 
    <footer class="page-footer font-small indigo">
        <div class="footer-copyright text-center py-3" style="background: black">
            <script>
                document.write(new Date().getFullYear());
            </script> © Copyright
            <a href="https://ww2.ufps.edu.co/"> UFPS</a>
        </div>
    </footer>-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="vista/js/login.js"></script>
    <!-- Javasript Sweetalert2 -->
    <script src="vista/js/sweetalert2.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/dist/js/adminlte.min.js"></script>
</body>

</html>