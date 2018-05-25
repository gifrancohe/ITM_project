
 <?php 

$dbname ="CasoEstudio";

include_once('Conectar.php');

$stmt= $db->query("
	CREATE TABLE Cliente(
	Cedula int not null,
	Nombre varchar (120) not null,
	Ciudad varchar (60) not null,
	Barrio varchar(20) not null,
	Direccion varchar (60) not null,
	telefono int (60) not null,
	Email varchar(60), 
	PRIMARY KEY (Cedula)
	)  ENGINE=InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci;
	");

if (!$stmt){
	//echo "<br>Error en la ejecución de la sentencia.
	//La tabla no ha sido creada";
}else {
	//echo "<br>Sentencia ejecutada.
	//La tabla fue creada exitosamente";
}

 ?>
 <?php 


$dbname ="CasoEstudio";

include_once('Conectar.php');

$stmt= $db->query("
	CREATE TABLE Personal(
	Usuario VARCHAR (60) not null,
	Contrasena VARCHAR (120) not null,
	PrimerNombre VARCHAR (60) not null,
	SegundoNombre VARCHAR (60) not null,
	PrimerApellido VARCHAR (60) not null,
	SegundoApellido VARCHAR (60) not null,
	Email VARCHAR (60) not null,
	Cargo varchar (30)not null,
	PRIMARY KEY (Usuario)
	)  ENGINE=InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci;
	");



//Validación de la sentencia SQL
if (!$stmt){
	//echo "<br>Error en la ejecución de la sentencia.
	//La tabla no ha sido creada";
}else {
	//echo "<br>Sentencia ejecutada.
	//La tabla fue creada exitosamente";
}

 ?>

 <?php 


$dbname ="CasoEstudio";

include_once('Conectar.php');

$stmt= $db->query("
	CREATE TABLE CasoEstudio.Encuesta(
	Pregunta1 VARCHAR (60) not null,
	Pregunta2 VARCHAR (60) null,
	Pregunta3 VARCHAR (60) null,
	Pregunta4 VARCHAR (60) null,
	Pregunta5 VARCHAR (60) null,
	Pregunta6 VARCHAR (60) null,
	Pregunta7 VARCHAR (60) null,
	Pregunta8 VARCHAR (60) not null
	)  ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_spanish_ci;
	");
//if (!$stmt){
//	echo "<br>Error en la ejecución de la sentencia.
//	La tabla no ha sido creada";
//}else {
//	echo "<br>Sentencia ejecutada.
//	La tabla fue creada exitosamente";
//}

 ?>

 <?php 

$dbname ="CasoEstudio";

include_once('Conectar.php');

$stmt= $db->query("
	CREATE TABLE PuntoVenta(
	NombreEstablecimiento VARCHAR (120) not null,
	Identificacion int not null,
	Ciudad VARCHAR (60) not null,
	Direccion VARCHAR (60) not null,
	telefono VARCHAR (60) not null,
	PRIMARY KEY (Identificacion)
	)  ENGINE=InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci;
	");

if (!$stmt){
	//echo "<br>Error en la ejecución de la sentencia.
	//La tabla no ha sido creada";
}else {
	//echo "<br>Sentencia ejecutada.
	//La tabla fue creada exitosamente";
}

 ?>

 <?php 


$dbname ="CasoEstudio";


include_once("Conectar.php");


$stmt= $db->query("
	CREATE TABLE Tenderos(
	Usuario varchar(30) not null,
	Contrasena varchar(120)not null,
	Nit int not null,
	NombreCompleto VARCHAR (120) not null,
	Ciudad VARCHAR (20) not null,
	Barrio VARCHAR (30) not null,
	Direccion VARCHAR (60) not null,
	telefono int  not null,
	PRIMARY KEY (Nit)
	)  ENGINE=InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci;
	");



if (!$stmt){
	echo "<br><br><br><h2><div align=\"center\"> <br>Error en la ejecución de la sentencia.
	La tabla no ha sido creada</div><br></h2>";
	 ?>
	 <button type="submit" class="btn btn-default btn-block" id="btregresar2" name="btregresar2">
	 <a href="?menu=RegresarBD><span class="glyphicon glyphicon-send"></span> Regresar</a>
	 </button>
	 <?php 
	
}else {
	echo "<br><br><br><h2><div align=\"center\"> <br>Sentencia ejecutada.La tabla fue creada exitosamente</div><br></h2>";
	 ?>
	 <button type="submit" class="btn btn-default btn-block" id="btregresar2" name="btregresar2">
	 <a href="?menu=RegresarBD"><span class="glyphicon glyphicon-send"></span> Regresar</a>
	 </button>
	 <?php 
}



 	

	