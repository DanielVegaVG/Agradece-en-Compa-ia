
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
    $sql="select * from Alumnos";
    $resultado=$conexion->query($sql);
    while ($fila=$resultado->fetch_array()){
        echo '<option value="' .$fila["puesto"] .'">'.$fila["puesto"].'-'.$fila["nombre"].'</option>';

        /* Esto sería para mostrar las filas sin el select
        echo "<p>"
        echo $fila["puesto"].'-'.$fila["nombre"];
        echo "</p>";
        */
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
    <form>
    <select>
<?php
      consultar();
?>
    </select>
    </form>
  </body>
  </html>
 