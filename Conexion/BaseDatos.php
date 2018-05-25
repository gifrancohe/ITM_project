<?php 


include_once('Conectar.php');


$stmt= $db->query("
	CREATE DATABASE CasoEstudio COLLATE utf8_spanish_ci;
	");

//Validación de la sentencia SQL
if (!$stmt){
	echo "<br><br><br><h2><div align=\"center\"> <br>Error en la ejecución de la sentencia.
	La base de datos no ha sido creada</div><br></h2>";
	}else {
	echo "<br><br><br><h2><div align=\"center\"> <br>Sentencia ejecutada.
	La base de datos ha sido creada exitosamente</div><br></h2>" ;
}

 ?>
 	
     <button type="submit" class="btn btn-default btn-block" id="btregresar1" name="btregresar1">
	 <a href="?menu=RegresarBD"><span class="glyphicon glyphicon-send"></span> Regresar</a>
	 </button>

	