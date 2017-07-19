<?php 
session_start();
include ("connection.php");
$con = conectar();

if ($_POST) {
	$nuevaContrasena = $_POST['pass1'];
	$rut = $_SESSION['rut'];
}

$sql = "UPDATE from profesional set password = '$nuevaContrasena' where rutProfesional = '$rut'";

mysql_query($sql, $con);
header('Location: mensajeModContrasena.php');

?>