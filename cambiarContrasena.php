
<html lang="en">

<head>

<?php include("header.php");?>
<?php include("connection.php");
      
$con=conectar(); 

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
                         <form action="mensajeCambioContrasena.php" method="post"> 
                            <br><br>
                            <div class="form-group">
                                 
                                Ingrese nueva password                    
                                <input name="pass" type="password" class="form-control" id="nuevaContrasena" placeholder="Ingrese contraseña" required>
                                Repita nueva Password                    
                                <input name="pass" type="password" class="form-control" id="nuevaContrasena" placeholder="Repita contraseña" required>
                            </div> 
                            <button type="submit" class="btn btn-default">Aceptar</button>                       
                       </form>
                                              
                    </div>  
                   
                </div>
            </div>
        </div>
    </center>

   

</body>

</html>