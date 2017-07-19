
	 <?php
	 session_start();
	  include("header.php"); 
	  include("connection.php");
	 $con=conectar(); 
	 
	?>   
	<html lang="en">

	<head>
	 
	 
	 <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/jquery.validate.js"></script>
	    <script src="js/messages_es.js"></script>
	    

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
	                <h2><center>Contraseña modificada exitosamente </center></h2>
	            	 <div align="center" class="col-md-4 col-md-offset-4">
	               	 <form>  
	            	 <center>
	            	  <a href="index.php" class="btn btn-success btn-lg">Volver</a>                       
	                  </form>
					</center>
	        </header>
	        </body>

	</html>