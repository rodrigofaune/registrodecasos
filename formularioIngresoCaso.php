<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("header.php");?>
    <?php include("connection.php");

    

    $con=conectar();

    ?>   
    <meta charset="UTF-8">
    <title>Document</title>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/messages_es.js"></script>
    <script src="js/bootstrap.min.js"></script>

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


    <div class="col-md-4 col-md-offset-4">
        <h2>"Formulario de casos "</h2>

        <form  id="commentForm" action="ingresoAlumno.php" method="post"> 

          <div class="form-group">                        
            <input name="idAlumno" type="text" class="form-control" placeholder="Rut Alumno"   data-rule-required="true"  data-msg-required="Ingrese rut del alumno">
        </div>    
        <div class="form-group">                        
        <input name="nombreAlumno" type="text" class="form-control" placeholder="Nombre Alumno" data-rule-required="true" data-msg-required="Ingrese nombre de alumno">
        </div>
        <div class="form-group">                        
            <input name="antecedentes" type="textarea" class="form-control" placeholder="Antecedentes" required>
        </div>
        <div class="form-group">                        
            <input name="idApoderado" type="textarea" class="form-control" placeholder="idApoderado" required>
        </div>

        <div class="form-group">                        
            <select name="seleccionCurso" id="seleccionCurso">
               <?php

               $sql="select * from curso";
               $rs=mysql_query($sql);

               while ($row = mysql_fetch_array($rs)) {
                 echo "<option value='".$row['idCurso']."'>".$row['nombreCurso']."</option>";
             }
             ?>

         </select>
     </div>
     <option value=""></option>         
     <button type="submit" class="btn btn-default">Ingresar</button> 
 </form><br/>
 <script>
   $("#commentForm").validate();
</script>

</div>


</body>
</html>


<!--

 SEP o no SEP

-          Motivo de derivación

-          Intervención con el alumno

-          Intervención con el apoderado

-          Diagnóstico Proceso

-          Intervención especialistas externos.

-          Informes adjuntos (aquí sería como para poner los míos digitales)
-->



