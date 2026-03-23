<?php


$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];


///Primero tenemos que conectar

$sql='SELECT puesto FROM Alumnos
    WHERE usuario="' .$usuario. '"
    AND contrasena="' .$contrasena. '";';


echo $sql;
echo '<br/>';

