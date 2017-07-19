<?php
include("connection.php");
$con=conectar();

if ($_POST) {

    $l=$_POST['login'];
    $p=$_POST['pass'];
    
    $sql="select * from profesional where rutProfesional='".$l."' and password='".$p."'";
    $query=mysql_query($sql, $con);
    $result1=mysql_fetch_array($query);
    //$nombre=$result1['nombreProfesional'];


    if ($result1==0) {

        echo "no conecta";
        //header('location:index.php');

    }else{


        session_start();
        $_SESSION['nombre']=$result1['nombreProfesional'];
        $_SESSION['perfil']=$result1['Perfil_idPerfil'];
        header('Location: menu.php');

        if ($_SESSION['perfil']==1) {
            header('Location: menuAdministrador.php');
        }else{
            header('Location: menu.php');
        }
        
    }


}



?>
