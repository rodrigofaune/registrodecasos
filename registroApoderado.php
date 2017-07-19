    <html lang="en">
    <head>

        <script src="jquery.js" type="text/javascript"></script> 
        <script src="js/jquery.Rut.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/validarut.js"></script>

        <?php include("header.php");?>
        <?php include("connection.php");

        $con=conectar(); 

        ?>   
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

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


        <div center class="col-md-4 col-md-offset-4">
            <h2>Ingrese Rut de Apoderado</h2>

            

          <p><label for="rut_demo_int">
            <form name="form1" onSubmit="javascript:return Rut(document.form1.rut.value)">

             
            <input type="text" name="rut"/>
             
             <button type="submit" class="btn btn-primary">Buscar</button> 

         </form>

         


     </div>


 </body>
 </html>