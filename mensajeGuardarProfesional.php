
    <?php
    session_start();


    if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=1){
        header('Location: index.php');
    }
    ?>

    <html lang="en">

    <head>
      <meta http-equiv="Refresh" content="5; url=menuAdministrador.php">
    <?php include("header.php");?>


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
                        <h2 align="center">Profesional guardado correctamente, serás redirigido al menú en 5 segundos...</h2>
                         <div align="center" class="col-md-4 col-md-offset-4">
                         <form>  
                       
                                            
                          </form>
                        </center>
                </header>
                </body>
      
    </body>

    </html>