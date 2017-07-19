<?php 

include("connection.php"); 
$con= conectar();


if ($_POST) {
	$rutProfesional=$_POST['rut'];  	
	$nombreProfesional=$_POST['nombre']; 
	$emailProfesional=$_POST['email']; 
	$idPerfil = $_POST['seleccion'];  
}

 //Perfil_idPerfil  ='".$idPerfil."' 
$sql= "UPDATE profesional SET emailProfesional ='' 
where rutProfesional = $rutProfesional";

mysql_query($sql, $con);

header('Location: listarProfesionales.php');


?>
