<?php
require 'configdb.php';
  function conectar(){
	//Crear la variable de conexion con la base de datos
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];


session_start();
$conexion=conectar();
$sql="select * from Alumnos";
$_SESSION['id']=$fila["puesto"]
if($resultado->num_rows > 0){
    $fila=$resultado->fetch_array()



header('Location: home.php');
exit();
}
else{
	header('Location: inicioSesionFallo.php');
	exit();
}

$conexion->close();
session_destroy();