 
<?php 

include("connection.php"); 
//include("class.phpmailer.php"); 
//include("class.smtp.php"); 
//$mail = new PHPMailer(); 
//$mail->IsSMTP(); 
//$mail->SMTPAuth = true; 
//$mail->SMTPSecure = "ssl"; 
//$mail->Host = "smtp.gmail.com"; 
//$mail->Port = 465; 
//$mail->Username = "divinasistemadm@gmail.com"; 
//$mail->Password = "adminregistrocasos";
$con = conectar();



$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$numerodeletras=10; 
$cadena = ""; 
for($i=0;$i<$numerodeletras;$i++)
{
    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
}



if ($_POST) {
	$rutProfesional=$_POST['rut'];  	
	$nombreProfesional=$_POST['nombre']; 
	$emailProfesional=$_POST['email']; 
	$idPerfil = $_POST['seleccion'];  
	$pass=$cadena;

}

$sql= "INSERT INTO profesional (rutProfesional, nombreProfesional, Perfil_idPerfil, emailProfesional, password) 
       VALUES ('".$rutProfesional."','".$nombreProfesional."','".$idPerfil."','".$emailProfesional."','".$pass."')";
if(mysql_query($sql)){

/*$mail->From = "divinasistemadm@gmail.com"; 
$mail->FromName = "Administrador"; 
$mail->Subject = "Sus datos de ringreso al sistema RC Divina Maestra"; 
$mail->AltBody = "Le damos la bienvenida al sistema RC del colegio Divina Maestra. Sus datos para ingresar al sistema son los siguientes:\r\n
                  Login:'".$rutProfesional."'\r\n
                  Contraseña: '".$pass."'\r\n\r\n\r\n
                  Saludos cordiales."; 
$mail->MsgHTML("<p>Le damos la bienvenida al sistema RC del colegio Divina Maestra. Sus datos para ingresar al sistema son los siguientes:<br>
                  Login:".$rutProfesional."<br>
                  Pass: ".$pass."<br><br><br>
                  Saludos cordiales.<p>"); 
$mail->AddAddress($emailProfesional, $nombreProfesional); 
$mail->IsHTML(true); 
if(!$mail->Send()) { 
 echo "Error: " . $mail->ErrorInfo."<br>"; 
 } else { 
 // COMO PONER LA REFERENCIA DE LA PAGINA MENSAJEGUARDARPROFESIONAL.PHP	
 echo "Mensaje enviado correctamente<br><br>"; 
 }*/

	echo "Los datos fueron guardados exitosamente<br><br>";
	echo "<a href='menuAdministrador.php' class='btn btn-primary btn-lg'>Volver al Menu</a>";


} else{
	echo "Error al intentar guardar los datos". mysqli_error($con);
}



?>



<html lang="en">

<head>

<?php include("header.php");?>

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
                <h2><center>Ingreso </center></h2>
            
        </header>
    <center>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-md-4 col-md-offset-4">
                         <form id="commentForm" action="validarIngreso.php" method="post"> 
                            <br><br>
                            <div class="form-group">
                                Login
                                <input name="login" type="text" class="form-control" id="usuario" placeholder="Ingrese su rut " required>
                            </div>    
                            <div class="form-group">   
                                Password                    
                                <input name="pass" type="password" class="form-control" id="contrasena" placeholder="Contraseña Usuario" required>
                            </div> 
                            <button type="submit" class="btn btn-default">Acceder</button>                       
                       </form>
                                              
                    </div>  
                   
                </div>
            </div>
        </div>
    </center>

   <script>
   $("#commentForm").validate();
</script>

</body>

</html>





 
		