
<?php
require 'configdb.php';
  function conectar(){
	//Crear la variable de conexion con la base de datos
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
function consultar(){
    $conexion=conectar();
    $sql="select * from alumnos";
    $resultado=$conexion->query($sql);
    while ($fila=$resultado->fetch_array()){
        echo "<p>";
        echo $fila["puesto"].'-'.$fila["nombre"];
        echo "</p>";
    }
}
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <p>HOLA</p>
<?php
consultar();
?>
  </body>
  </html>
 