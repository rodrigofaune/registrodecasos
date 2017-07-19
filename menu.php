<?php
    session_start();
    

    if(!isset($_SESSION['nombre']) || $_SESSION['perfil']==1){
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
                        <a href="#">Acerca del Software</a>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Salir</a>
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
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img src="imagenes/dibujo_vectorized.png" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>SISTEMA DE CASOS PEDAGÓGICOS</h1>
                <p><h4>Colegio Divina Maestra</h4></p>
                <p>Un verdadero espacio para ti.</p>
                <a class="btn btn-primary btn-lg" href="formularioIngresoCaso.php">Ingresar Nuevo Caso</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <?php
                    $mensajes = array(
                        '“Tenemos derecho a ser diferentes”. Iñigo Rodríguez. (Educador Social).', 
                        '“Para juzgar hace falta una cierta distancia. Ni amistad, ni enemistad: RESPETO”.',
                        '“La única pedagogía posible es estimular la curiosidad del educando”. Bernabé Tierno (Pedagogo)',
                        '“La educación es el vestido de gala para asistir a la fiesta de la vida”. Miguel Rojas Sánchez(México)',
                        '“El educador pone el consejo, pero la parte más importante la pone el aconsejado”. Asier Félix. (Educador Social)',
                        'Nadie es, si se prohíbe que otros sean'
                        );

                    shuffle($mensajes);

                    $i = 1;

                    foreach ($mensajes as $mensaje) {
                        if($i < 2)
                            echo $mensaje;
                        $i++;
                    } ?>

                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Misión</h2>
                <p>“El compromiso del Colegio Divina Maestra es entregar a los alumnos y alumnas una educación orientada a la formación Científico Humanista, dando énfasis al desarrollo social, cognitivo, físico, artístico, afectivo y valórica, considerando los distintos procesos de aprendizaje de cada estudiante, para enfrentar con éxito los desafíos que le permitan insertarse en la sociedad en la cual le corresponde vivir, en una tarea compartida con la familia”.
</p>
               
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Visión</h2>
                <p>“El compromiso educativo del Colegio Divina Maestra es formar alumnos y alumnas responsables, comprometidos, creativos y participativos con una sólida construcción intelectual, valórica y moral, capaces de enfrentar los desafíos que le presenta la vida al insertarse en la sociedad”.
</p>
               
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Objetivos</h2>
                <p>Las actividades que desarrolla el Departamento de Orientación tienen como objetivo último la orientación personal de cada alumno/a a lo largo de su escolaridad, con la finalidad de lograr un desarrollo integral de su personalidad. Por lo tanto, desde el Liceo Divina Maestra entendemos la orientación como un proceso de ayuda al alumno, a las familias, al conjunto del Profesorado y al propio Centro.</p>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Rodrigo Faune, Delia Jofré 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
