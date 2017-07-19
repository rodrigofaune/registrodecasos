
<?php
session_start();

?>

<html lang="es">

<head>

    <?php
    include("header.php");
    include("connection.php");
    ?>

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

    <!-- Page Content -->
    <header>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Sistema Registro de Casos</title>
        </head>
        <body>
           <br><br><br>
           <h2><center>Cambio de contraseña</center></h2>

       </header>
       <center>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-md-4 col-md-offset-4">
                       <form action="modificarContrasena.php" method="post">
Pass1:
<input type="text" name="pass1" id="pass1"> <br>
Pass:2
<input type="text" name="pass2" id="pass2"><br>

<button  onclick="comprobarPass()">comprobar</button>

    </form>

                </div>  

            </div>
        </div>
    </div>
</center>

<script>
    
function comprobarPass() {

    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;

  if (password1!=password2) {

    alert("las contraseñas no son iguales");    

  }

}


</script>

</body>

</html>