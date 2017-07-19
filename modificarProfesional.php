<?php
session_start();


if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=1){
  header('Location: index.php');
}

if ($_POST) {

  $rutEliminar=$_POST['rutEliminar'];  

}


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <?php include("header.php");?>
  <?php include("connection.php");

  $con=conectar(); 



  ?>   
  <meta charset="UTF-8">
  <title>Registro de Casos</title>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/messages_es.js"></script>


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

        <li>
          <a href="menuAdministrador.php">Menu administrador</a>
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
              <a href="#"><i class="fa fa-fw fa-envelope"></i> Opciones</a>
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

<?php

$sql="select * from profesional where rutProfesional='".$rutEliminar."'";
$rs=mysql_query($sql);
$row2=mysql_fetch_array($rs);

?>

<div align="center" class="col-md-3 col-md-offset-4">
  <h2>Ingrese datos del Profesional</h2><br><br><br>

  <form  id="commentForm" action="validarModificarProfesional.php" method="post"> 

    <div class="form-group">                        
      <input name="rut" type="text" class="form-control" placeholder="Rut Profesional" value="<?php echo $row2['rutProfesional'];?>" disabled>
    </div>    
    <div class="form-group">                        
      <input name="nombre" type="text" class="form-control" placeholder="Nombre Profesional" value="<?php echo $row2['nombreProfesional'];?>" disabled>
    </div>
    <div class="form-group">                        
      <input name="email" type="email" class="form-control" placeholder="Email" data-rule-required="true" value="<?php echo $row2['emailProfesional'];?>" data-msg-required="Ingrese Email">
    </div>
    <div class="form-group">                        
      <select name="seleccion" id="lista" class= "form-control"placeholder="Perfil" data-rule-required="true" data-msg-required="Seleccione perfil">  


       <?php

       $sql2= "select * from perfil where idPerfil='".$row2[Perfil_idPerfil]."'";
       $rs2=mysql_query($sql2);
       $row3=mysql_fetch_array($rs2);
       $sql= "select * from perfil";
       $rs=mysql_query($sql);
       echo "<option value = '".$row3['idPerfil']."' > ".$row3['nombrePerfil']."</option>";
       while ($row = mysql_fetch_array($rs)) {
       echo "<option value = '".$row['idPerfil']."' > ".$row['nombrePerfil']."</option>";
       }
       ?>
     </select>

   </div>
   <option value=""></option>         
   <button type="submit" class="btn btn-default">Modificar</button> 
 </form><br/>
 <script>
  $("#commentForm").validate();
</script>

</div>


</body>
</html>