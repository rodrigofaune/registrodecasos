<?php
session_start();


if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=1){
    header('Location: index.php');
}
?>




<html lang="en">

<head>
 <?php 
 include("header.php");
 include("connection.php"); 
 $con=conectar(); 
 ?> 
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
                                <a href="formularioModificarContrasena.php"><i class="fa fa-fw fa-envelope"></i> Modificar Contraseña</a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="panel-body">
        <div class="dataTable_wrapper">
            <h2>Listado de Profesionales</h2><br><br><br>
            <?php  
//tomamos los datos del archivo conexion.php  


//se envia la consulta  
            $result = mysql_query("SELECT * FROM profesional");  

            echo "<table class='table table-striped table-bordered table-hover' >";  
            echo "<tr>";  
            echo "<th>Nombre</th>";  
            echo "<th>Rut</th>";  
            echo "<th>Email</th>";
            echo "<th>Perfil</th>";  
            echo "</tr>";  
            while ($row = mysql_fetch_array($result)){ 
              $sql2="select * from perfil where idPerfil='".$row['Perfil_idPerfil']."'";
              $rs2=mysql_query($sql2);
              $row2 = mysql_fetch_array($rs2);
              echo "<tr>";  
              echo "<td>".$row['nombreProfesional']."</td>";  
              echo "<td>".$row['rutProfesional']."</td>";  
              echo "<td>".$row['emailProfesional']."</td>";  
              echo "<td>".$row2['nombrePerfil']."</td>";  
              echo "<td>"; 
              echo "<form action='eliminarProfesional.php' method='post'>
              <input name='rutEliminar' type='hidden' value='".$row['rutProfesional']."'>
              <button type='submit' class='btn btn-danger'>Eliminar</button> 
              </form>
              <form action='modificarProfesional.php' method='post'>
              <input name='rutEliminar' type='hidden' value='".$row['rutProfesional']."'>
              <button type='submit' class='btn btn-primary'>Modificar</button> 
              </form>";

              echo"</td>";
              echo "</tr>";  
          }  
          echo "</table>";  
          ?>  
      </div>
  </div>





  <br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>
  <br><br><br><br>
  <footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Rodrigo Faune, Delia Jofré 2015</p>
        </div>
    </div>
</footer>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>


</html>