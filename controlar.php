<?php


$nombre = $_POST["usuario"];
$password = $_POST["password"];
$rol = $_POST["rol"];

	$usuario1="adm";
	$usuario2="mtro";
	$usuario3="alum";

	$pass1="adm";
	$pass2="mtro";
	$pass3="alum";

if($nombre=="" && $password=="" && $rol=="")
{ 
 	header("Location: http://localhost:8888/proyectologin/login.php");
}

if($rol=="Administrador" && $nombre==$usuario1 && $password==$pass1)
{
 	header("Location: http://localhost:8888/proyectologin/ingresoadm.php");
}
if($rol=="Maestro" && $nombre==$usuario2 && $password==$pass2)
{
 	header("Location: http://localhost:8888/proyectologin/ingresomtro.php");
}
if($rol=="Alumno" && $nombre==$usuario3 && $password==$pass3)
{
 	header("Location: http://localhost:8888/proyectologin/ingresoalum.php");
}

?>