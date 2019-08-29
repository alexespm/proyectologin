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

if($nombre=="" || $password=="" || $rol=="Selecciona Rol" || $nombre!=$usuario1 || $nombre!=$usuario2 || $nombre!=$usuario3)
{ 
 	header("Location: http://localhost:81/proyectologin/login.php");
}

if($rol=="Administrador" && $nombre==$usuario1 && $password==$pass1)
{
 	header("Location: http://localhost:81//proyectologin/ingresoadm.php");
}
if($rol=="Maestro" && $nombre==$usuario2 && $password==$pass2)
{
 	header("Location: http://localhost:81/proyectologin/ingresomtro.php");
}
if($rol=="Alumno" && $nombre==$usuario3 && $password==$pass3)
{
 	header("Location: http://localhost:81/proyectologin/ingresoalum.php");
}

?>