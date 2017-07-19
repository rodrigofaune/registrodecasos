<?php
session_start();


if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=1){
    header('Location: index.php');
}
?>


<html lang="en">

<head>
 <?php include("header.php");?>     
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="imagenes/logo2.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="menuAdministrador.php">Menú administrador</a>
                    </li>

                </ul>
                <ul class="nav navbar-right top-nav">  

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['nombre'] ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Cuenta</a>
                            </li>
                            <li>
                                <a href="formularioCambiarContrasena.php"><i class="fa fa-fw fa-envelope"></i> Modificar Contraseña</a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    

    <div align="center" class="col-md-4 col-md-offset-4">
        <h2>Menú de opciones</h2><br><br><br>
        <a href="ingresarProfesional.php" class="btn btn-primary btn-lg">Ingresar Profesional</a>
        <a href="listarProfesionales.php" class="btn btn-success btn-lg">Listar Profesionales</a>
    </div>


<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Rodrigo Faune, Delia Jofré 2017</p>
        </div>
    </div>
</footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>


</html>