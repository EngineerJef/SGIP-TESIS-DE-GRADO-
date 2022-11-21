<?php

session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");
//$proceso= $con -> mysqli_query=("Select * from usuarios where cedula='$usuario' and contrasena='contrasena' ");
$proceso= mysqli_query($con, "SELECT * FROM usuarios WHERE cedula='$usuario' AND contrasena='$contrasena'");
$proceso2= mysqli_query($con, "SELECT * FROM usuarios WHERE cedula='$usuario' AND contrasena='$contrasena' AND tipo_usuario='ADMINISTRADOR' ");
//$proceso2== mysqli_query($con, "SELECT * FROM usuarios WHERE tipo_usuario='ADMINISTRADOR'");
$usuario== mysqli_query($con, "SELECT * FROM usuarios WHERE tipo_usuario='NORMAL'");

if ($resultado = mysqli_fetch_array($proceso)) {

    if ($resultado2 = mysqli_fetch_array($proceso2)) {
     	$_SESSION['u_usuario']=$usuario;
	header("location: ../inicio.php");

     }else{

$_SESSION['u_usuario']=$usuario;
	header("location: ../inicio2.php");

    }
	
} else{
 
	header("location: ../index.html");

	
}


?>