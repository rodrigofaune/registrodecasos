<?php 

include("connection.php"); 
$con= conectar();


if ($_POST) {

	$rutEliminar=$_POST['rutEliminar'];  	

	

}

$sql= "DELETE FROM profesional where rutProfesional = '".$rutEliminar."'";
mysql_query($sql, $con);
header('Location: listarProfesionales.php');


?>
