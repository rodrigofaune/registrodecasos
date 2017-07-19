<?php
  
  function conectar(){

  	$user="root";
  	$pass="";
  	$server="127.0.0.1";
  	//nombre de la base cambiado
  	$db="registrocasosbd-3";
  	$con=mysql_connect($server, $user, $pass) or die("No se ha conectado a la base de datos". mysql_error());
  	mysql_select_db($db, $con);

  	return $con;

  }

 

?>